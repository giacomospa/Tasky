<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get("/",[PublicController::class,"home"])->name("homepage");

Route::get("/auth/profile",[PublicController::class,"userProfile"])->name("user.profile");

Route::get("/service/index",[ServiceController::class,"index"])->name("index");

