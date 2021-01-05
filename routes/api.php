<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/login', [App\Http\Controllers\UserController::class, 'authenticate'])->name('login');

    Route::group(['middleware' => ['jwt.verify']], function() {
        Route::get('product_list', [App\Http\Controllers\UserController::class, 'product_list']);

    });

    