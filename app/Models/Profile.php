<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        "firstname",
        "lastname",
        "user_id"
    ];

    // Fk User 
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    // All Profile
    public function getProfiles()
    {
        return Profile::all();
    }

}
