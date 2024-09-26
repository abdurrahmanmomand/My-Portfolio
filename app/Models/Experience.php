<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="experience";
    protected $fillable = [
        'specialist',
        'start_date',
        'end_date',
        'place_of_experiance',
        'tasks',
        'about_experience',
        'user_id',
    ];
    }
