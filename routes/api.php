<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Modules\Ynotz\AccessControl\Http\Controllers\UsersController;

Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('users', UsersController::class);
    Route::apiResource('products', ProductController::class);
});


