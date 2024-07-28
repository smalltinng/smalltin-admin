<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
class MonthlyStats extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'correct_answers', 
        'incorrect_answers', 
        'total_attempts', 
        'month'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
