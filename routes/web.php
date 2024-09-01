<?php

use App\Http\Controllers\JobController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);

Route::get('/register',[RegisteredUserController::class,'create']);
Route::get('/register',[RegisteredUserController::class,'store']);

Route::get('/login', [SessionController::class,'create']);
Route::post('/login', [SessionController::class,'store']);
Route::delete('/logout', [SessionController::class,'destroy']);