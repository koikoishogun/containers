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




/********************************************Admin Panel Routes*****************************************/
Route::get('/interested',function(){
	return view('admin.prospective');
} );
Route::get('/admin-panel','admin@landing');
Route::post('/admin/upload/catalogue','admin@up_cat');

//admin post a blog
Route::post('/post/a/blog','blog@ad');

Route::get('/show/post/','blog@show');
Route::get('/show/post/form','blog@show_form');
//Route::post('/admin/upload/catalogue','admin@up_cat');

/********************************************  END Admin Panel Routes*****************************************/
/**********************************Pages Routes***************************************/

Route::get('/about-us',function(){
	return view('pages.about-us');
} );
// hizi ndio blog routes

//return blog view
Route::get('/blog','blog@show');
//admin post a blog
Route::post('/post/a/blog','blog@post');

//mwisho wa  blog routes
Route::get('/products',function(){
	return view('pages.products');
} );


