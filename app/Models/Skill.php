<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
       'title',
       'parcentage',

       'color',
       'user_id',
       'section_id',
    ];
    public function getTitleAttribute($value){
        return strtoupper($value);
    }
}
