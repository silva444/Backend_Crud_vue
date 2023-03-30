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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/lista', [\App\Http\Controllers\ListUserController::class,'listagem']);
Route::post('/adicionar',[\App\Http\Controllers\ListUserController::class,'Adicionar']);
Route::get('/Editar/{user}',[\App\Http\Controllers\ListUserController::class,'Editar']);
Route::put('/Update/{user}',[\App\Http\Controllers\ListUserController::class,'Update']);
Route::delete('/delete/{user}',[\App\Http\Controllers\ListUserController::class,'delete']);
