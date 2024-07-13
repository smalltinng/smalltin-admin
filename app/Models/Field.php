<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    public function subFields(){
        return $this->hasMany(SubField::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
