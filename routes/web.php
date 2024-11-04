<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [LoginController::class, 'login']);

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

// require __DIR__.'/auth.php';
