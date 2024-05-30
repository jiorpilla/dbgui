<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
