<?php

use App\Http\Controllers\Api\v1\PostApiController;
use Illuminate\Support\Facades\Route;

// Route::apiResource('post', PostApiController::class);

Route::prefix('v1')->group(function (){
    Route::apiResource('post', PostApiController::class);
});