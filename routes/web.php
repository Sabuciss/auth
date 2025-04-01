<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;


Route::get('/', function () {return view('welcome');});

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);


