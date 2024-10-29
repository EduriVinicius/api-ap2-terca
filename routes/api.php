<?php

use App\Http\Controllers\CarController;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/Car',[CarController::class,'index']);
Route::get('/Car/{id}',[CarController::class,'show']);
Route::post('/Car',[CarController::class,'store']);
Route::put('/Car/{id}',[CarController::class,'update']);
Route::delete('/Car/{id}',[CarController::class,'destroy']);
