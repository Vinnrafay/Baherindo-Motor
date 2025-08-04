<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use app\Models\MotorBaherindo;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MotorController;
use Illuminate\Support\Facades\Route;

Route::resource('/', WelcomeController::class);
Route::resource('/about', AboutController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/motor', MotorController::class);
