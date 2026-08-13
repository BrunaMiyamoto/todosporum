<?php

use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\PostagemApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::apiResource('postagens', PostagemApiController::class);
Route::post('/login', [AuthApiController::class, "login"]);
Route::post('/logout', [AuthApiController::class, 'logout'])->middleware("auth:sanctum");

Route::apiResource("postagens", PostagemApiController::class)->except(["index", "show"])->middleware("auth:sanctum");
Route::apiResource("postagens", PostagemApiController::class)->only(["index", "show"]);