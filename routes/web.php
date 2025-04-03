<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;



Route::get('/', function () {return view('welcome');});

Route::get('/register', [RegisterController::class, "create"])->middleware("guest");

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/login', [SessionController::class, "create"])->middleware("guest");
Route::post('/login', [SessionController::class, 'store']);

Route::get('/bmw', function () {return view('auth.bmw');})->middleware("guest");



