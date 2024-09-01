<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/tictactoe', function () {
    return view('tictactoe');
})->name('tictactoe');
