<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get("/",[PublicController::class,"home"])->name("homepage");

Route::get("/auth/profile",[PublicController::class,"userProfile"])->name("user.profile");

Route::get("/service/index",[ServiceController::class,"index"])->name("index");

Route::get("/service/createService",[ServiceController::class,"create"])->name("create.service");

Route::post("/service/createService/store",[ServiceController::class,"store"])->name("service.store");

Route::get("/service/showService/{service}",[ServiceController::class,"show"])->name("show.service");

Route::get("/service/editService/{service}",[ServiceController::class,"edit"])->name("edit.service");

Route::put("/service/updateService/{service}",[ServiceController::class,"update"])->name("update.service");

Route::delete("/service/delete/{service}",[ServiceController::class,"delete"])->name("delete.service");

Route::get("/review/index",[ReviewController::class,"index"])->name("index.review");

Route::get("review/createReview/{service_id}",[ReviewController::class,"create"])->name("create.review");

Route::post("review/createReview/store",[ReviewController::class,"store"])->name("store.review");

Route::get("contacts/contact",[PublicController::class,"contacts"])->name("contacts");