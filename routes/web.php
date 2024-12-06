<?php

use Illuminate\Support\Facades\Route;

//start game
Route::get('/', [\App\Http\Controllers\MainController::class, 'startGame'])->name('startGame');
Route::post('/', [\App\Http\Controllers\MainController::class, 'prepareGame'])->name('prepareGame');

//In game
Route::get('/game', [\App\Http\Controllers\MainController::class, 'game'])->name('game');
Route::get('/answer/{answer}', [\App\Http\Controllers\MainController::class, 'answer'])->name('answer');
Route::get('next_question', [\App\Http\Controllers\MainController::class, 'nextQuestion'])->name('next_question');

// Game over
Route::get('/show_results', [\App\Http\Controllers\MainController::class, 'showResults'])->name('show_results');
