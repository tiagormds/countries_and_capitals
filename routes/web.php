<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello World!";
});

Route::get('/show_data', [\App\Http\Controllers\MainController::class, 'showData']);
