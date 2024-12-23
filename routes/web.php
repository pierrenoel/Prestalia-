<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/profiles",[ProfileController::class,"index"]);

Route::get("/profile/{profile:id}",[ProfileController::class,"show"])->name("profile.show");
