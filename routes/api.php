<?php

use Illuminate\Http\Request;
use App\Post;
use App\Notification;
use App\Feed;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articles', function () {
    return Post::where('status','posted')->orderBy('created_at','desc')->take(3)->get();
});
Route::get('/blogs', function () {
    return Post::where('status','posted')->orderBy('created_at','desc')->take(6)->get();
});
Route::get('/blogdetails/{id}', function ($id) {
    return Post::find($id);
});
Route::get('/notifications', function () {
    return Notification::where('status','pending')->orderBy('created_at','desc')->get();
});
Route::post('/notifications', function (Request $request) {
    
    
    $noti=Notification::where('id',$request->notify)->first();
    $noti->status='active';
    $noti->save();
    
});

Route::get('/instagram', function () {
    return Feed::where('category','instagram')->orderBy('created_at','desc')->take(8)->get();
});
Route::get('/bilogs', function () {
    return Post::where('status','posted')->orderBy('created_at','desc')->take(3)->get();
});

