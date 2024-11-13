<?php

namespace App\Events;

use App\Models\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class GotMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    // public $connection = 'sync'; // Add this line


    /**
     * Create a new event instance.
     *
     * @param \App\Models\Message $message
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // Ensure $this->message->conversation_id is available
        return new PresenceChannel('chats.' . $this->message->conversation_id);
    }

public function broadcastAs(){
    return "GotMessage";
}





    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        return [
            'id' => $this->message->id,
            'conversation_id' => $this->message->conversation_id,
            'sender_id' => $this->message->sender_id,
            'sender_type' => $this->message->sender_type,
            'message' => $this->message->message,
            'created_at' => $this->message->created_at->toDateTimeString(),
            'updated_at' => $this->message->updated_at->toDateTimeString(),
            'sender' => [
                'id' => $this->message->sender->id,
                'username' => $this->message->sender->username,
                'email' => $this->message->sender->email,
                // Include other sender details as needed
            ],
        ];
    }
}
