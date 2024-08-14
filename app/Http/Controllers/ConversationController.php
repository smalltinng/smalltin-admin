<?php

namespace App\Http\Controllers;

use App\Events\GotMessage;
use App\Models\Conversation;
use App\Http\Requests\StoreConversationRequest;
use App\Http\Requests\UpdateConversationRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->id();

        $conversations = Conversation::whereHas("admins", function ($query) use ($userId) {
            $query->where('admin_id', $userId);
        })
        ->whereHas('lastMessage') // Ensure the conversation has a last message
        ->with('lastMessage')
        ->with("user")
        ->orderBy('updated_at', 'desc')
        ->paginate(50);
    
        return response()->json($conversations);

        
    }


    public function unAttendTo()
    {
        $userId = auth()->id();

        $conversations = Conversation::whereHas('lastMessage') // Ensure the conversation has a last message
        ->with('lastMessage')
        ->with("user")
        ->orderBy('updated_at', 'desc')
        ->paginate(50);
    
        return response()->json($conversations);

        
    }


    public function createConversation(Request $request)
{
    // Validate incoming request data
    $validated = $request->validate([
        'user_id' => 'required|exists:users,id',
        'admin_id' => 'required|exists:admins,id',
        'message' => 'required|string',
    ]);

    // Create a new conversation
    $conversation = Conversation::create();

    // Attach the user and admin to the conversation
    $conversation->users()->attach($validated['user_id']);
    $conversation->admins()->attach($validated['admin_id']);

    // Add the initial message
    $conversation->messages()->create([
        'sender_id' => $validated['admin_id'],
        'message' => $validated['message'],
    ]);

    return response()->json([
        'message' => 'Conversation created successfully',
        'conversation' => $conversation,
    ], 201);
}




public function sendMessageAsAdmin(Request $request, $conversationId)
{
    $request->validate([
        'message' => 'required|string',
    ]);

    $admin = auth()->guard('admin')->user(); // Assuming the admin is authenticated
    $conversation = Conversation::findOrFail($conversationId);

    $message = new Message([
        'conversation_id' => $conversation->id,
        'message' => $request->input('message'),
    ]);

    $message->sender()->associate($admin); // This sets both sender_id and sender_type
    $message->save();
    event(new GotMessage($message));

    return response()->json([
        'success' => true,
        'message' => 'Message sent successfully!',
        'data' => $message,
    ]);
}



    /**
     * Show the form for creating a new resource.
     */
    public function assignToAdmin(Request $request, $conversationId)
{
    $adminId = $request->input('admin_id');

    $conversation = Conversation::findOrFail($conversationId);
    $conversation->admins()->syncWithoutDetaching([$adminId]); // Attach the admin without detaching existing ones

    return response()->json(['message' => 'Conversation assigned to admin successfully.']);
}




    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConversationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function getMessages($id)
    {
        // Find the conversation by ID
        $conversation = Conversation::with(['user', 'admins']) // Eager load user and admins
            ->findOrFail($id);
    
        // Get all messages associated with this conversation
        $messages = $conversation->messages()->with('sender')->get();
    
        return response()->json([
            'conversation_id' => $conversation->id,
            'conversation_user' => $conversation->user,
            'admins' => $conversation->admins, // Include admins in the response
            'messages' => $messages,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conversation $conversation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConversationRequest $request, Conversation $conversation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conversation $conversation)
    {
        //
    }
}
