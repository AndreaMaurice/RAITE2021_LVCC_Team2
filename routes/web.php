<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\AgencyController@index');

Route::get('/assign', 'App\Http\Controllers\AgencyController@assignPage');

Route::post('/', 'App\Http\Controllers\AgencyController@startAssigning');

Route::get('/view', 'App\Http\Controllers\AgencyController@viewPage');
