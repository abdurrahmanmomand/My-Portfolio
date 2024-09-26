<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    public function skills(){
        return $this->hasMany(Skill::class);
    }
    public $timestamps = false;
    protected $fillable = [
        'title',
        'about',
        's_name',
        'user_id'
    ];
}
