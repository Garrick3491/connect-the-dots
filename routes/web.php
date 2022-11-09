<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);
Route::get('/activities', [\App\Http\Controllers\AboutController::class, 'activities']);
Route::get('/reload-captcha', [\App\Http\Controllers\ContactController::class, 'reloadCaptcha']);
Route::get('/captcha-validation', [\App\Http\Controllers\ContactController::class, 'capthcaFormValidate']);
