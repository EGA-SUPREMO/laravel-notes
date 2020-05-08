<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/costumers');
});

Route::view('/about-us', 'aboutUs');
Route::get('/service', 'ServicesController@index');
Route::post('/service', 'ServicesController@store');

Route::get('/costumers', 'CostumerController@index');
Route::get('/costumers/create', 'CostumerController@create');
Route::post('/costumers', 'CostumerController@store');
