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

Route::get('heartbeat',[]);
Route::post('contact',[]);
//Soft delete
Route::delete('contact/{contact}',[]);
//Hard delete reference=https://medium.com/biodati/rest-api-deletion-pattern-4eb8b0dafbce
Route::delete('contact/purge/{contact}',[]);
Route::put('contact/{contact}',[]);
Route::get('contacts',[]);
Route::get('heartbeat',[]);
Route::get('heartbeat',[]);
Route::get('heartbeat',[]);
