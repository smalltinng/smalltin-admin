<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $fillable = [
        "email",
        "password",
        "username",
        "fullname",
        'email_verified_at'

    ];


    public function conversations()
    {
        return $this->belongsToMany(Conversation::class, 'conversation_admin');
    }

    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    // public function settings()
    // {
    //     //;
    //     return Setting::first();
    // }
}
