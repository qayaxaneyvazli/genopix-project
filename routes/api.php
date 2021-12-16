<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TraitsController;
use App\Http\Controllers\Api\UserController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/forgot', [AuthController::class, 'forgot']);
Route::post('/reset', [AuthController::class, 'reset']);

Route::get('/me', [ProfileController::class, 'me'])->middleware('auth:sanctum');

Route::get('/traits', [TraitsController::class, 'traits'])->middleware('auth:sanctum');
Route::put('/updateUser',[UserController::class, 'updateUser'])->middleware('auth:sanctum');
Route::put('/updateProfile',[UserController::class, 'updateUserProfile']);

//    ->middleware('auth:sanctum');
//
