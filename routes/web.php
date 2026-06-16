<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get("/", [homeController::class, "home"]);
Route::get("/forumduvidas", [homeController::class, "forumDuvidas"]);
