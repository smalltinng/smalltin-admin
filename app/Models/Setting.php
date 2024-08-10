<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        "total_users",
        "total_winners",
        "monthly_winnings",
        "total_amount",
        "approximate_pay_amount "
    ];
}
