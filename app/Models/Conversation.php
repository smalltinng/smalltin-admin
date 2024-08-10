<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Message;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = ['last_message_id'];

    // A conversation belongs to a user (assuming each conversation is linked to a single user)
    public function user()
    {
        return $this->belongsTo(User::class, 'id'); // Assuming 'user_id' is the foreign key in the conversations table
    }

    // Each conversation can have multiple admins
    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'conversation_admin');
    }

    // Get the last message in the conversation
    public function lastMessage()
    {
        return $this->hasOne(Message::class)->latestOfMany(); // `latestOfMany` ensures you get the most recent related message
    }

    // A conversation has many messages
    public function messages()  {
        return $this->hasMany(Message::class);
    }
}