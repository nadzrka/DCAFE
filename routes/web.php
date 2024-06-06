<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'doLogin']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'doRegister']);
Route::get('logout', [AuthController::class, 'logout']);
