<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected Profile $profile;

    public function __construct()
    {
        $this->profile = new Profile();
    }

    public function index()
    {
        return view("profiles.index",["profiles" => $this->profile->getProfiles()]);
    }

    public function show(Profile $profile)
    {
        return view("profiles.show",["profile" => $profile]);
    }
}
