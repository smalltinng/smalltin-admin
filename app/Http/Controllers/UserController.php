<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\EmailVerificationNotification;
use App\Notifications\ForgetPasswordNotification;
use Error;
use Ichtrojan\Otp\Otp;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $user = User::where("id", auth()->id())->with("field")->firstOrFail();

            return response()->json([
                "message" => "User Get Successfully",
                "data" => $user
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "message" => "Failed to retrieve user",
                "error" => $e->getMessage()
            ], 500);
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {

        try {
            // Validate the email input
            $validatedData = $request->validate([
                "email" => "required|string|email"
            ]);
            $email = $validatedData['email'];

            $user = User::where('email', $email)->first();


            if ($user) {
                // Check if the email is verified
                if (!$user->is_verified) {
                    return response()->json([
                        "message" => "Email not verified.",
                        "status" => false,
                        "registration" => "Incomplete",
                    ], 202);
                } else if ($user->is_verified && $user->password == null) {
                    return response()->json([
                        "message" => "Password is not set.",
                        "status" => false,
                        "registration" => "Incomplete",
                    ], 203);
                } else if ($user->is_verified && $user->username == null) {
                    return response()->json([
                        "message" => "Username is not set.",
                        "status" => false,
                        "registration" => "Incomplete",
                    ], 203);
                } else if ($user->is_verified && $user->username != null && $user->password != null) {

                    return response()->json([
                        "message" => "User Exists. Proceed!",
                        "status" => true,
                        "registration" => "Complete",
                        "data" => $user->fresh()->with(),
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Some Error Occurred",
                        "status" => false,
                        "registration" => "InComplete",

                    ], 400);
                }
            } else {
                // Create a new user
                $user = User::create(["email" => $email]);
                // Send email verification notification
                $user->notify(new EmailVerificationNotification());
                $success = [
                    "message" => 'User created. OTP sent for verification.',
                    "success" => true

                ];
                return response()->json($success, 201);
            }
        } catch (Error $e) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $e,
            ], 400);
        }
    }

    public function login_with_password(Request $request)
    {
        $validatedData = $request->validate([
            "email" => "required|email|exists:users,email",
            "password" => "required|min:6"
        ]);

        $user = User::where("email", $validatedData["email"])->first();

        if (Hash::check($validatedData["password"], $user->password)) {
            $accessToken = $user->createToken("auth")->plainTextToken;


            if ($user->is_verified && $user->username == null) {
                return response()->json([

                    "message" => "Username is not set.",
                    "status" => false,
                    "registration" => "Incomplete",
                    "token" => $accessToken,
                    "data" => $user->fresh()
                ], 203);
            } else if ($user->is_verified && $user->username != null && $user->password != null) {

                return response()->json([
                    "message" => "User Successfully Login",
                    "status" => true,
                    "registration" => "Complete",
                    "token" => $accessToken,
                    "data" => $user->fresh(),
                ], 200);
            } else {
                return response()->json([
                    "message" => "Some Error Occurred",
                    "status" => false,
                    "registration" => "InComplete",

                ], 400);
            }
        } else {
            return response()->json([
                "message" => "Password is incorrect",
                "status" => false,
                "registration" => "InComplete",
            ], 400);
        }
    }

    public function resend_otp(Request $request)
    {
        $validatedData = $request->validate([
            "email" => "required|email|exists:users,email"
        ]);

        $user = User::where("email", $validatedData['email'])->first();
        if ($user) {
            $user->notify(new EmailVerificationNotification());
            $success = [
                "message" => "Verification Otp sent Succesfully ",
                "status" => true
            ];
            return response()->json($success, 200);
        } else {
            $success = [
                "message" => "User Not Found ",
                "status" => false
            ];
            return response()->json($success, 404);
        }
    }

    public function verify_email(Request $request)
    {

        $validatedData = $request->validate([
            "email" => "required|string|email",
            "token" => "required|max:6|min:5",
        ]);
        try {
            $email = $validatedData['email'];
            $token = $validatedData['token'];
            $otp = (new Otp)->validate($email, $token);
            if (!$otp->status) {
                return response()->json([
                    "status" => false,
                    "message" => $otp->message
                ], 400);
            } else {
                $user = User::where("email", $email)->first();
                if ($user) {
                    $user->update([
                        "is_verified" => true,
                        "email_verified_at" => now()
                    ]);
                    $accessToken = $user->createToken("auth")->plainTextToken;
                    $success = [
                        "message" => "Verified Successfully",
                        'status' => true,
                        "token" => $accessToken,
                    ];
                    return response()->json($success, 200);
                } else {
                    $success = [
                        "meassage" => "Not verify Successful",
                        'status' => false,
                    ];
                    return response()->json($success, 404);
                }
            }
        } catch (Error $e) {
            return response()->json(["message" => "some error occured"], 400);
        }
    }



    /**
     * Display the specified resource.
     */
    public function forget_password(Request $request)
    {
        $validatedData = $request->validate([
            "email" => "required|email|exists:users,email"
        ]);

        $user = User::where("email", $validatedData['email'])->first();
        if ($user) {
            $user->notify(new ForgetPasswordNotification());
            $success = [
                "message" => "Verification Otp sent Succesfully ",
                "status" => true
            ];
            return response()->json($success, 200);
        } else {
            $success = [
                "message" => "User Not Found ",
                "status" => false
            ];
            return response()->json($success, 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,)
    {
        $validatedData = $request->validate([
            "username" => "sometimes|unique:users,username|string",
            "user_bio" => "sometimes|string",
            "password" => "sometimes|confirmed|min:6",
            'field_id' => "sometimes|int",
            'sub_field_1' => "sometimes",
            'sub_field_2' => "sometimes",
            'sub_field_3' => "sometimes",
            'sub_field_4' => "sometimes",

        ]);
        $user =   User::find(auth()->id());

        $users = $user->update($validatedData);

        if ($users) {
            $success = [
                "message" => "User updated successfully",
                "status" => true,
                "user" => $user->fresh(),

            ];

            return response()->json($success, 200);
        } else {
            $success = [
                "message" => "Error updating user",
                "status" => false
            ];
            return response()->json($success, 400);
        }
    }


    public function logout(Request $request)
    {

        $user = User::where('id', auth()->id())->first();

        if ($user) {
            $user->tokens()->delete();
            $success = [
                "message" => "Log out succesfully",
                "status" => true,
            ];
            return response()->json($success, 200);
        } else {
            $success = [
                "message" => "User Not Found",
                "status" => false,
            ];
            return response()->json($success, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
