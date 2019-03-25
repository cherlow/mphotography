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

/*
learn codes
Route::get('/users/{id}/{name}',function($id, $name){
  return 'this is user '. $id . " with name ". $name;
});

*/

Route::get('/', 'PagesController@index');

Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/gallery','PagesController@gallery');
Route::get('/eventss','PagesController@events');
Route::get('/blog','PagesController@blog');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::resource('posts','PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('events', 'EventsController');
Route::delete('/images/{image}','EventsController@images');
Route::get('/categories','CategoriesController@index');
Route::post('/categories','CategoriesController@store');
Route::get('/categorystatus/{category}','CategoriesController@status');
Route::get('/categories/{category}/edit','CategoriesController@edit');
Route::put('/categories/{category}','CategoriesController@update');
Route::delete('/categories/{category}','CategoriesController@destroy');
Route::get('/feeds','FeedsController@index');
Route::get('/feeds/create','FeedsController@create');
Route::post('/feeds','FeedsController@store');
Route::get('/blogdetails/{blog}','PagesController@blogdetails');
Route::post('/blogcomment','PagesController@blogcomment');
Route::post('/messagepost','PagesController@messagepost');
Route::get('/eventdetails/{blog}','PagesController@eventdetails');
Route::get('/users','UsersController@users');
Route::get('/messages','MessagesController@showmessages');
Route::get('/readmessage/{mail}','MessagesController@readmail');
Route::post('/reserve','PagesController@reserve');
Route::get('/listreservation','ReservationsController@reservation');
Route::get('/showreservation/{reservation}','ReservationsController@showreservation');
Route::get('/reviews','ReviewsController@showreviews');
Route::post('/reviews','ReviewsController@createreview');
Route::get('/reviewstatus/{review}','ReviewsController@reviewstatus');

Route::get('/publish/{post}','PostsController@publish');
Route::delete('/feeds/delete/{image}','FeedsController@delete');













