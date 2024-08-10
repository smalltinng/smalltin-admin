<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubField;
use App\Models\Field;
class Question extends Model
{
    use HasFactory;


    protected $fillable = [];


    public function subfield()
    {
        return $this->belongsTo(Subfield::class, 'sub_fields_id');
    }

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
