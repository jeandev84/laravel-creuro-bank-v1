<?php

use App\Http\Controllers\Api\V1\ParkingController;
use App\Http\Controllers\Auth\AuthenticationController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('login', [AuthenticationController::class, 'login']);

Route::group(['middleware' => ['jwt.verify']], function () {

    Route::apiResources([
        'parkings' => ParkingController::class
    ]);

    Route::post('refresh', [AuthenticationController::class, 'refresh']);

});
