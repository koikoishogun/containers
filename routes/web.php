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
//show sub form
Route::get('/new/subscriber/','sub@show' );
//save sub details
Route::post('/save/subscriber','sub@save' );


Route::get('/order',function(){
	return view('subscriber.orderform');
} );
//Route::get('/get/catalogue/','catalogue@show' );
//email visitor catalogue
Route::post('/send/catalogue','sub@save');
//send quotation to visitor
Route::post('/send/quote','order@quote');
//user send msg to admin
Route::post('/send/msg','msg@send');






/********************************************Admin Panel Routes*****************************************/
//show interested sent catalogue
Route::get('/interested',"admin@inter" );

//admin home
Route::get('/admin-panel','admin@landing');

//upload Catalogue
Route::post('/admin/upload/catalogue','admin@up_cat');


Route::get("/admin/view/posts",'blog@ad_po');

//return blog view
Route::get('/blog','blog@show');

//admin post a blog
Route::post('/post/a/blog','blog@ty');

//admin update blog
Route::post('/update/blog','blog@update');

//update blog form
Route::get('/update/blog/form/{id} ','blog@update_form');

//show admin msgs
Route::post('/show/msg','msg@show');

//admin upload product  pics
Route::post('/upload/pic','img@upload');







//Route::get('/show/post/','blog@show');
//Route::get('/show/post/form','blog@show_form');
//Route::post('/admin/upload/catalogue','admin@up_cat');

/********************************************  END Admin Panel Routes*****************************************/

Route::get('/post-blog',function(){
	return view('admin.post-blog');
} );

/**********************************Pages Routes***************************************/

Route::get('/about-us',function(){
	return view('pages.about-us');
} );
// hizi ndio blog routes




//mwisho wa  blog routes
Route::get('/products',"img@show");
Route::get('/p','blog@ad_p');



