<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['conversation_id', 'sender_id', 'message'];

    // A message belongs to a single conversation
    public function conversation()
    {
        return $this->belongsTo(Conversation::class, 'conversation_id');
    }

    // A message has a sender, which is a user
  // Define the polymorphic relationship
  public function sender()
  {
      return $this->morphTo();
  }
}
