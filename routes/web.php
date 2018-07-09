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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostsController');

Route::get('/hello', function () {
    return 'Hello World!';
});
// Route::get('/about', function () {
//     return view('pages/about');
// });

// Route::get('/users/{id}/{name}', function($id, $name){
//   return 'This is user '.$name.' with and id of '.$id;
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
