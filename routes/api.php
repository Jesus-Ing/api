<?php

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
//Reset state before starting test
//POST /reset
//200 OK
Route::post(uri: '/reset', action: 'ResetController@reset');

//Get balance for existing account
//GET /balance?account_id=100
//200 20
Route::get(uri: '/balance', action: 'BalanceController@show');


Route::post(uri: '/event', action: 'EventController@store');
