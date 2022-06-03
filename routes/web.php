<?php

use Adtech\Authentication\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'authentication'], function() {
    Route::get('/', [AuthenticationController::class, 'showLoginForm']);

    Route::post('/',[AuthenticationController::class, 'login']);

    Route::get('/create',[AuthenticationController::class, 'createUser']);
});
