<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('/show_data', [\App\Http\Controllers\MainController::class, 'showData']);
