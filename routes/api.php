<?php

use App\Http\Controllers\API\AuthApiController;
use App\Http\Controllers\API\PackageApiController;
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

Route::controller(AuthApiController::class)->middleware(['cors', 'json.response'])->group(function(){
Route::post('/signin',  'signIn');
Route::post('/login',  'logIn');
});


Route::middleware(['cors', 'json.response', 'auth:sanctum'])->group( function () {
Route::get('/packages', [PackageApiController::class, 'getAll']);
Route::post('/packages/subscribe', [PackageApiController::class, 'subscribe']);
});

