<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Education extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "educations";
    protected $fillable = [
      "degree",
      "start_date",
      "end_date",
      "institute",
      "about",
      "user_id",
    ];
    public function save(array $options = [])
    {
        if (!$this->user_id) {
            $this->user_id = Auth::id(); // Set the user_id to the authenticated user's ID
        }
        return parent::save($options);
    }

}
