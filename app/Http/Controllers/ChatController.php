<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index (){
        $userId = auth()->id();
        $conversations = Message::where('conversation_id', $userId)
       ->with("sender")
      ->latest('updated_at') // To get the most recent conversations first
      ->get();
return response()->json([
    "data"=>$conversations
]);
      
    }

    public function create(Request $request){


        $request->validate([
            'message' => 'required|string',
        ]);
    
         $userId = Auth()->user();// Assuming the admin is authenticated
      //  $conversation = Conversation::findOrFail($conversationId);
    
        $message = new Message([
            'conversation_id' => $userId->id,
            'message' => $request->input('message'),
        ]);
    
        $message->sender()->associate($userId); // This sets both sender_id and sender_type
        $message->save();
    
        return response()->json([
            'success' => true,
            'message' => 'Message sent successfully!',
            'data' => $message,
        ]);
       
      
       
    }
}
