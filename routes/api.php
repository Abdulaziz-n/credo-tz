<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'auth:api',
    'prefix' => 'auth'

], function () {


    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});
Route::post('auth/login', [AuthController::class, 'login'])->name('login');


Route::group([
    'middleware' => 'auth:api',
], function () {

    Route::get('get/prize', [\App\Http\Controllers\PrizeController::class, 'getRandomPrize']);
    Route::get('set/prize', [\App\Http\Controllers\PrizeController::class, 'setPrize']);
});

