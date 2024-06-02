<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\castController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.master');
});

Route::get('/dashboard', [AuthController::class, 'index']);

Route::get('/tabel', [AuthController::class, 'tables']);

Route::get('/data-tabel', [AuthController::class, 'data']);

Route::resource('cast', castController::class);

