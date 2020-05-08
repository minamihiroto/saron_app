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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('main','MainController@index');
Route::get('main/about','MainController@about');
Route::get('main/lesson_menu','MainController@lesson_menu');
Route::get('main/access','MainController@access');

Route::get('member_limited','MemberLimitedController@video_list')
    ->middleware('auth');
Route::get('member_limited/profile','MemberLimitedController@profile')
    ->middleware('auth');

Route::get('admin/share','AdminController@share')
    ->middleware('auth');
