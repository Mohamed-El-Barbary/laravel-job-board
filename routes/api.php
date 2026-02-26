<?php

use App\Http\Controllers\api\v1\AuthApiController;
use App\Http\Controllers\Api\v1\PostApiController;
use Illuminate\Support\Facades\Route;

// Route::apiResource('post', PostApiController::class);

Route::prefix('v1')->group(function () {
    Route::apiResource('post', PostApiController::class);

    Route::prefix('auth')->group(function () {
        Route::post('login', [AuthApiController::class, 'login']);

        Route::middleware('auth:api')->group(function () {
            Route::get('me', [AuthApiController::class, 'me']);
            Route::post('logout', [AuthApiController::class, 'logout']);
            Route::post('refresh', [AuthApiController::class, 'refresh']);
        });
    });
});
