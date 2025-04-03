<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Field;
class Question extends Model
{
    use HasFactory;


    protected $fillable = [
        "field_id",
        "user_id",
        "question",
        "a",
        "b",
        "c",
        "d",
        "answer"

    ];



    public function field()
    {
        return $this->belongsTo(Field::class, 'field_id');
    }



    protected $hidden = [
        'remember_token',
    ];
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

}