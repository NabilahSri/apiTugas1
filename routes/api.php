<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login',[UserApiController::class,'login']);
Route::get('/logout/{id}',[UserApiController::class,'logout']);
Route::get('/user/show',[UserApiController::class,'show']);
Route::post('/user/add',[UserApiController::class,'add']);
Route::get('/user/show/{id}',[UserApiController::class,'showId']);
Route::get('/user/edit/{id}',[UserApiController::class,'edit']);
Route::get('/user/delete/{id}',[UserApiController::class,'delete']);
