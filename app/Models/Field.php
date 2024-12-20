<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

protected $fillable =  [
    "name",
    "color",
    "size"
];

    public function subFields(){
        return $this->hasMany(SubField::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_field');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'field_id');
    }
}
