<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});
Route::get('/form', [HomeController::class, 'index'])->name('index');
Route::post('/home', [AuthController::class, 'proses'])->name('home.post');
Route::get('/home', [AuthController::class, 'tampil'])->name('home');
