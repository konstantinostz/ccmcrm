<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

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




Route::get('/', [LoginController::class, 'Login'])->name('login');

Route::post('/', [LoginController::class, 'authenticate']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'Dashboard'])->name('user.dashboard');
});

Route::get('/test', [UserController::class, 'test']);


















