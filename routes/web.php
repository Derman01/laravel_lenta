<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/',
    [IndexController::class, 'Index'])
    ->name('home');

Route::get('/article/{id}',
    [IndexController::class, 'Article']
    )->name('article');

Route::get('/rubric/{id}',
    [IndexController::class, 'Rubric']
)->name('rubric');

Route::get('/login',
    [AuthController::class, 'showLoginForm']
    )->name('login');

Route::get('/register',
    [AuthController::class, 'showRegisterForm']
)->name('register');
Route::post('/register_process',
    [AuthController::class, 'register']
)->name('register_process');
