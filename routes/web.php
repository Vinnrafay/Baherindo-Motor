<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MotorController;
use Illuminate\Support\Facades\Route;
use app\Models\MotorBaherindo;

Route::resource('/', WelcomeController::class);
Route::resource('/about', AboutController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/motor', MotorController::class);

