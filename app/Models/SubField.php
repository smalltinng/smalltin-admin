<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubField extends Model
{
    use HasFactory;


    public function field(){
        return $this->belongsTo(Field::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
