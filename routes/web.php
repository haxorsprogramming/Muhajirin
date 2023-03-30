<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController as ApiAuthController;
use App\Http\Controllers\FE\LandingPageController as FeLandingPageController;

Route::get('/', [FeLandingPageController::class, 'HomePage']);
