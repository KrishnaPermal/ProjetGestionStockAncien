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

//Dashboard
Route::prefix('dashboard')->group(function () {
    Route::get('articles', 'ArticlesController@index');
    Route::post('articles', 'ArticlesController@add');
    Route::delete('articles/{id}', 'ArticlesController@delete');
    Route::put('articles/{id}', 'ArticlesController@update');
    Route::get('clients','ClientsController@index');
});
