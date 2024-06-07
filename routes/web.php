<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminMenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'doLogin']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'doRegister']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('/ordered-menu', 'OrderedMenuController@index')->name('ordered-menu.index');
Route::post('/ordered-item', 'OrderedMenuController@store')->name('ordered-item.store');
// routes/web.php
Route::get('/search', [MenuController::class, 'search'])->name('search');
// routes/web.php
Route::get('/admin-menu', [AdminMenuController::class, 'index'])->name('admin.menu.index');
Route::post('/admin-menu', [AdminMenuController::class, 'store'])->name('admin.menu.store');



