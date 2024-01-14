<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;


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

Route::post('Cholewa/310487/people/create', [PeopleController::class, 'create']);
Route::put('Cholewa/310487/people/update/{id}', [PeopleController::class, 'update']);
Route::delete('Cholewa/310487/people/delete/{id}', [PeopleController::class, 'delete']);
Route::get('Cholewa/310487/people/read/{id}', [PeopleController::class, 'read']);
Route::get('Cholewa/310487/people/read', [PeopleController::class, 'readall']);
