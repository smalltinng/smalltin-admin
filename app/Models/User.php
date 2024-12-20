<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\MonthlyStats;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Support\Carbon;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable, HasApiTokens;


   

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        "is_verified",
        "user_bio",
        "field_id",
        "profile",
        "jobs",
        "total_question_correct",
        "total_question_attempt",
        "email_verified_at"
    ];


    public function comments()
{
    return $this->hasMany(Comment::class);
}
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isUser()
    {
        return $this->role === 'user';
    }

    public function fields()
    {
        return $this->belongsToMany(Field::class, 'user_field');
    }
    
    public function subfields()
    {
        return $this->belongsToMany(SubField::class, 'user_subfield');
    }
    public function monthlyStats()
    {
        return $this->hasMany(MonthlyStats::class);
    }
    public function monthlyStat()
    {
        $currentMonth = Carbon::now()->format('Y-m');
        return $this->hasOne(MonthlyStats::class)
                    ->where('month', $currentMonth)
                    ->latest();
    }

    public function conversation()
    {
        return $this->hasOne(Conversation::class);
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

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
