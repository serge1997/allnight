<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\ImageEstablishmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;
use App\Http\Controllers\TypeEstablishmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('states', [StateController::class, 'onListAll']);
Route::get('citys', [CityController::class, 'onfindByStateId']);
Route::get('type-establishment', [TypeEstablishmentController::class, 'onListAll']);

Route::controller(EstablishmentController::class)->group(function() {
    Route::post('establishment', 'onCreate');
});

Route::controller(ImageEstablishmentController::class)->group(function() {
    Route::post('establishment-image', 'OnCreate');
});
