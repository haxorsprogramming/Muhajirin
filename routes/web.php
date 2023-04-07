<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FE\Landing\PageController as FeLandingPageController;
use App\Http\Controllers\FE\Admin\PageController as FeAdminPageController;
use App\Http\Controllers\FE\Admin\AuthController as FeAdminAuthController;

Route::get('/', [FeLandingPageController::class, 'HomePage']);

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', [FeAdminPageController::class, 'LoginPage']);
    Route::group(['prefix' => 'auth'], function (){
        Route::group(['prefix' => 'login'], function (){
            Route::post('process', [FeAdminAuthController::class, 'LoginProcess']);
        });
    });
});
