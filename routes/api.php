<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('contacts',[\App\Http\Controllers\ContactController::class,'index']);
Route::get('contacts/{contact}',[\App\Http\Controllers\ContactController::class,'show']);
Route::post('contacts',[\App\Http\Controllers\ContactController::class,'store']);
//Soft delete
Route::delete('contacts/{contact}',[\App\Http\Controllers\ContactController::class,'delete']);
//Hard delete reference=https://medium.com/biodati/rest-api-deletion-pattern-4eb8b0dafbce
Route::delete('contacts/purge/{contact}',[\App\Http\Controllers\ContactController::class,'destroy']);
Route::put('contacts/{contact}',[\App\Http\Controllers\ContactController::class,'update']);
Route::post('contacts/{contact}/informations',[\App\Http\Controllers\ContactInformationController::class,'store']);
Route::post('contacts-informations',[\App\Http\Controllers\ContactInformationController::class,'store']);
Route::delete('contacts-informations/{contactInformation}',[\App\Http\Controllers\ContactInformationController::class,'destroy']);
Route::delete('contacts/statistic',[\App\Http\Controllers\ContactInformationController::class,'destroy']);
