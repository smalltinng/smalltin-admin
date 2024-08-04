<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
class SubField extends Model
{
    use HasFactory;


    public function field(){
        return $this->belongsTo(Field::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_subfield');
    }


    public function questions()
    {
        return $this->hasMany(Question::class, 'sub_fields_id');
    }
}
