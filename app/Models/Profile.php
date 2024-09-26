<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'profile_image',
        'bg_image',
        'fullname',
        'about',
        'company',
        'job',
        'country',
        'address',
        'phone',
        'email',
        'twiter',
        'facebook',
        'instagram',
        'linkedin',
        'user_id',
    ];
    protected function casts(): array
    {
        return [
            'options' => 'array',
        ];
    }
    public $timestamps=false;
}
