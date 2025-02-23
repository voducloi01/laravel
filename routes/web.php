<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login',[LoginController::class, 'handleSubmit'])->name('login.submit');

Route::resource('/blog', BlogController::class);

Route::fallback(function () {
    echo "<h1>Page not found!</h1>";
});
