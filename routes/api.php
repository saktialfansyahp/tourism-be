<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourismplaceController;

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
    'middleware' => 'api',
    'prefix' => 'tourismplace'
], function ($router) {
    Route::get('/get', [TourismplaceController::class, 'get_tourismplace']);
    Route::post('/create', [TourismplaceController::class, 'insert_tourismplace']);
    Route::delete('destroy/{id}', [TourismplaceController::class, 'destroy']);
});
