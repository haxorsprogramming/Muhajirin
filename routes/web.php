<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FE\Landing\PageController as FeLandingPageController;
use App\Http\Controllers\FE\Admin\PageController as FeAdminPageController;

Route::get('/', [FeLandingPageController::class, 'HomePage']);

