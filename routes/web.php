<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProjectController;

Route::get('/', [IndexController::class, 'index']);
// Route::get('/hello', [IndexController::class, 'show']);

Route::resource('projects', ProjectController::class)
    ->only(['index']);