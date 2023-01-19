<?php

use App\Http\Controllers\Api\AuthController;
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
Route::post('/login', [AuthController::class, 'loginUser']);
Route::post('/register', [AuthController::class, 'registerUser']);
Route::get('/home', [UserController::class, 'index'])->name('home');



Route::group(['middleware' => 'auth:sanctum'], function(){

    // Route::get('/home', [App\Http\Controllers\Api\UserController::class, 'index']);



});

