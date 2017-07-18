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

Route::get('/',function(){
	return view('welcome');
} );
Route::get('/new/subscriber/','sub@show' );
Route::post('/save/subscriber','sub@save' );


Route::get('/order',function(){
	return view('subscriber.orderform');
} );
//Route::get('/get/catalogue/','catalogue@show' );

Route::post('/send/catalogue','catalogue@sen');
Route::post('/send/quote','order@fr');

Route::get('/admin-panel','admin@landing');





