<?php

use App\Http\Controllers\LaptopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/laptops', [LaptopController::class, 'index']);
Route::post('/laptops', [LaptopController::class, 'store']);
Route::get('/laptops/{laptop}', [LaptopController::class, 'show']);
Route::put('/laptops/{laptop}', [LaptopController::class, 'update']);
Route::delete('/laptops/{laptop}', [LaptopController::class, 'destroy']);
