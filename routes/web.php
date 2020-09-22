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

/*Route::get('/', function () {
    return ("welcome");
});*/
/*Route::get("index", "IndexController@index");*/

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::get('category/{slug}', 'CategoryController@index');
Route::get('tag/{slug}', 'TagController@index');
Route::get('post/{slug}', 'PostController@index')->middleware('guest');
Route::get('kontakt', 'ContactController@index');
Route::get('user/{id}', 'AccountController@index');
Route::get('/logout', 'LogoutController');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
