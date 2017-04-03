<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/client/{id}', 'HomeController@index');

Auth::routes();

Route::get('/home/subscribe', 'HomeController@subscribe');

Auth::routes();

Route::post('/home/subscribe', ['as' => 'create.subscription', 'uses' => 'HomeController@createSubscription']);

Auth::routes();

Route::resource('/loader', 'LoadController');



// API routes...
Route::resource('/api/v1/clients', 'ClientController');

Route::resource('/api/v1/events', 'EventController');

Route::resource('/api/v1/bills', 'BillController');

