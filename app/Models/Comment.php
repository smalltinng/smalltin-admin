<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
protected $table = 'comments';
    protected $fillable = ['user_id', 'monthly_stats_id', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function monthlyStat()
    {
        return $this->belongsTo(MonthlyStats::class);
    }
}
