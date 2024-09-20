<?php

namespace App\Http\Controllers;

use App\Models\MonthlyStats;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\EmailVerificationNotification;
use App\Notifications\ForgetPasswordNotification;
use Error;
use Exception as GlobalException;
use Ichtrojan\Otp\Otp;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Exception;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */


   /**  * @OA\Get(
     *     path="/api/user",
     *     summary="Get user Details",
     *     description="Return all the users details",
     *     operationId="registerUser",
     *     tags={"Authentication"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="User Get Successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="User Get Successfully"),
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="data", type="string", example="{}")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Validation error",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string", example="Unauthenticated")
     *         )
     *     )
     * )
     */
    public function index(Request $request)
    {
        try {
            $currentMonth = Carbon::now()->format('Y-m');
            $user = User::where("id", auth()->id())->with("monthlyStat")->with("fields")->with("subfields")->firstOrFail();
            // Find the existing MonthlyStats record or create a new one
            // $monthlyStats = MonthlyStats::where([
            //               'user_id' => auth()->id(),
            //               'month' => $currentMonth
            //           ]);
            return response()->json([
                "message" => "User Get Successfully",
                "data" => $user,
              //  "monthlyStats"=> $monthlyStats->fresh()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "message" => "Failed to retrieve user",
                "error" => $e->getMessage()
            ], 500);
        }
    }


    public function getAllMonthly(Request $request)
    {
        try {
            $user = MonthlyStats::where("user_id", auth()->id())->get(); // Use where() to filter by user_id
            return response()->json([
                "message" => "MonthlyStats retrieved successfully",
                "data" => $user
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "message" => "Failed to retrieve user",
                "error" => $e->getMessage()
            ], 500);
        }
        
    }




    public function getlatesMonthly(Request $request)
    {
        try {
            $currentMonth = Carbon::now()->format('Y-m');
  // Find the existing MonthlyStats record or create a new one
            
            $monthlyStats = MonthlyStats::firstOrNew([
                'user_id' => auth()->id(),
                'month' => $currentMonth
            ]);

            
            return response()->json([
                "message" => "MonthlyStats Get Successfully",
                "data" => $monthlyStats
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


     
 /**
     * @OA\Post(
     *     path="/api/login",
     *     summary="Login or register user",
     *     description="This endpoint handles user login and registration based on email verification status.",
     *     operationId="login",
     *     tags={"Authentication"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"email"},
     *             @OA\Property(property="email", type="string", format="email", example="user@example.com")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="User exists. Proceed!",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="User Exists. Proceed!"),
     *             @OA\Property(property="status", type="boolean", example=true),
     *             @OA\Property(property="registration", type="string", example="Complete"),
     *             @OA\Property(property="data", type="object")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="User created. OTP sent for verification.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="User created. OTP sent for verification."),
     *             @OA\Property(property="success", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(
     *         response=202,
     *         description="Email not verified.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Email not verified."),
     *             @OA\Property(property="status", type="boolean", example=false),
     *             @OA\Property(property="registration", type="string", example="Incomplete")
     *         )
     *     ),
     *     @OA\Response(
     *         response=203,
     *         description="Registration incomplete.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Password is not set."),
     *             @OA\Property(property="status", type="boolean", example=false),
     *             @OA\Property(property="registration", type="string", example="Incomplete")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Some error occurred or validation error.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Some Error Occurred"),
     *             @OA\Property(property="status", type="boolean", example=false),
     *             @OA\Property(property="registration", type="string", example="InComplete"),
     *             @OA\Property(property="errors", type="object")
     *         )
     *     )
     * )
     */
    public function login(Request $request)
    {

        try {
            // Validate the email input
            $validatedData = $request->validate([
                "email" => "required|string"
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
        } catch ( \Exception $e) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $e,
            ], 400);
        }
    }


    /**
     * @OA\Post(
     *     path="/api/password",
     *     summary="Login with email and password",
     *     description="This endpoint allows users to log in with their email and password.",
     *     operationId="loginWithPassword",
     *     tags={"Authentication"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"email", "password"},
     *             @OA\Property(property="email", type="string", format="email", example="user@example.com"),
     *             @OA\Property(property="password", type="string", format="password", example="password123")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="User successfully logged in.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="User Successfully Login"),
     *             @OA\Property(property="status", type="boolean", example=true),
     *             @OA\Property(property="registration", type="string", example="Complete"),
     *             @OA\Property(property="token", type="string", example="token123"),
     *             @OA\Property(property="data", type="object")
     *         )
     *     ),
     *     @OA\Response(
     *         response=203,
     *         description="Registration incomplete.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Username is not set."),
     *             @OA\Property(property="status", type="boolean", example=false),
     *             @OA\Property(property="registration", type="string", example="Incomplete"),
     *             @OA\Property(property="token", type="string", example="token123"),
     *             @OA\Property(property="data", type="object")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Some error occurred or password is incorrect.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Some Error Occurred"),
     *             @OA\Property(property="status", type="boolean", example=false),
     *             @OA\Property(property="registration", type="string", example="InComplete")
     *         )
     *     )
     * )
     */

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


     /**
     * @OA\Post(
     *     path="/api/resend-otp",
     *     summary="Resend OTP to user's email",
     *     description="This endpoint resends the OTP for email verification to the user's email address.",
     *     operationId="resendOtp",
     *     tags={"Authentication"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"email"},
     *             @OA\Property(property="email", type="string", format="email", example="user@example.com")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Verification OTP sent successfully.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Verification Otp sent Successfully"),
     *             @OA\Property(property="status", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="User Not Found"),
     *             @OA\Property(property="status", type="boolean", example=false)
     *         )
     *     )
     * )
     */

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


     /**
     * @OA\Post(
     *     path="/api/verify-email",
     *     summary="Verify user's email with OTP",
     *     description="This endpoint verifies the user's email using a provided OTP token.",
     *     operationId="verifyEmail",
     *     tags={"Authentication"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"email", "token"},
     *             @OA\Property(property="email", type="string", format="email", example="user@example.com"),
     *             @OA\Property(property="token", type="string", example="123456")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Verified Successfully.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Verified Successfully"),
     *             @OA\Property(property="status", type="boolean", example=true),
     *             @OA\Property(property="token", type="string", example="token123")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Some error occurred or invalid OTP.",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Invalid OTP or some error occurred")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found.",
     *         @OA\JsonContent(
     *             @OA\Property(property="meassage", type="string", example="Not verify Successful"),
     *             @OA\Property(property="status", type="boolean", example=false)
     *         )
     *     )
     * )
     */

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

 /**
     * @OA\Post(
     *     path="/api/forget-password",
     *     summary="Send OTP for password reset",
     *     description="This endpoint sends an OTP to the user's email for password reset.",
     *     operationId="forgetPassword",
     *     tags={"Authentication"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"email"},
     *             @OA\Property(property="email", type="string", format="email", example="user@example.com")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Verification OTP sent successfully.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Verification OTP sent Successfully"),
     *             @OA\Property(property="status", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="User Not Found"),
     *             @OA\Property(property="status", type="boolean", example=false)
     *         )
     *     )
     * )
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

 /**
 * @OA\Put(
 *     path="/api/update",
 *     summary="Update user information",
 *     description="This endpoint updates the user's information. Only the fields provided in the request will be updated. If a new profile picture is uploaded, the old one will be deleted to save space.",
 *     operationId="updateUser",
 *     tags={"User"},
 *     security={{"sanctum":{}}},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MultipartContent(
 *             @OA\Property(property="username", type="string", example="new_username"),
 *             @OA\Property(property="user_bio", type="string", example="This is my new bio"),
 *             @OA\Property(property="password", type="string", example="newpassword"),
 *             @OA\Property(property="password_confirmation", type="string", example="newpassword"),
 *             @OA\Property(property="fields", type="array", @OA\Items(type="integer"), example={1, 2, 3}),
 *             @OA\Property(property="sub_fields", type="array", @OA\Items(type="integer"), example={4, 5, 6}),
 *             @OA\Property(
 *                 property="profile", 
 *                 type="string", 
 *                 format="binary", 
 *                 description="Profile picture upload (JPEG, PNG, JPG, GIF). Maximum size is 2MB."
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="User updated successfully.",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="User updated successfully"),
 *             @OA\Property(property="status", type="boolean", example=true),
 *             @OA\Property(property="user", type="object", 
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="username", type="string", example="new_username"),
 *                 @OA\Property(property="email", type="string", example="user@example.com"),
 *                 @OA\Property(property="user_bio", type="string", example="This is my new bio"),
 *                 @OA\Property(property="profile", type="string", example="profiles/abcd1234.jpg")
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Error updating user.",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Error updating user"),
 *             @OA\Property(property="status", type="boolean", example=false)
 *         )
 *     )
 * )
 */
public function update(Request $request)
{
    $validatedData = $request->validate([
        'username' => 'sometimes|unique:users,username|string',
        'user_bio' => 'sometimes|string',
        'password' => 'sometimes|confirmed|min:6',
        'fields' => 'sometimes|array',
        'fields.*' => 'int',
        'sub_fields' => 'sometimes|array',
        'sub_fields.*' => 'int',
        'profile' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = User::find(auth()->id());

    if ($user) {
        // Handle profile image upload
        if ($request->hasFile('profile')) {
            // Delete the old profile image if it exists
            if ($user->profile) {
                Storage::disk('public')->delete($user->profile);
            }

            // Store the new profile image
            $profileImage = $request->file('profile');
            $profilePath = $profileImage->store('profiles', 'public');
            $validatedData['profile'] = $profilePath;
        }

        // Update user data
        $user->update($validatedData);

        // Update fields
        if (isset($validatedData['fields'])) {
            $user->fields()->sync($validatedData['fields']);
        }

        // Update subfields
        if (isset($validatedData['sub_fields'])) {
            $user->subfields()->sync($validatedData['sub_fields']);
        }

        $success = [
            'message' => 'User updated successfully',
            'status' => true,
            'user' => $user->fresh(),
        ];

        return response()->json($success, 200);
    } else {
        $error = [
            'message' => 'Error updating user',
            'status' => false,
        ];
        return response()->json($error, 400);
    }
}

 /**
     * @OA\Post(
     *     path="/api/logout",
     *     summary="Logout the authenticated user",
     *     description="This endpoint logs out the authenticated user by deleting their tokens.",
     *     operationId="logoutUser",
     *     tags={"Authentication"},
     *     security={{"sanctum":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Log out successfully.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Log out successfully"),
     *             @OA\Property(property="status", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="User not found.",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="User Not Found"),
     *             @OA\Property(property="status", type="boolean", example=false)
     *         )
     *     )
     * )
     */
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
