<?php

use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task 1', [TugasController::class, 'hal1']);
Route::get('/task 2', [TugasController::class, 'hal2']);
Route::get('/task 3', [TugasController::class, 'hal3']);
