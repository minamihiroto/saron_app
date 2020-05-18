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

Auth::routes();

Route::get('/','MainController@index');
Route::get('main/about','MainController@about');
Route::get('main/lesson_menu','MainController@lesson_menu');
Route::get('main/access','MainController@access');
Route::get('main/news/{id}','MainController@news');

Route::get('member_limited','MemberLimitedController@video_list')
    ->middleware('auth');
Route::get('member_limited/profile','MemberLimitedController@profile')
    ->middleware('auth');

Route::get('admin/share','AdminController@share')
    ->middleware('auth');
Route::post('admin/share','AdminController@store')
    ->middleware('auth');
Route::delete('admin/destroy/{post_id}','AdminController@destroy')
    ->middleware('auth');

Route::get('admin/news_share','AdminController@news_share')
    ->middleware('auth');
Route::post('admin/news_share','AdminController@announcement')
    ->middleware('auth');
Route::delete('admin/news_destroy/{post_id}','AdminController@news_destroy')
    ->middleware('auth');


