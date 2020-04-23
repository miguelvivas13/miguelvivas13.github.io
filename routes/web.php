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

Route::view('/','home')->name('home');

Route::view('/club','club')->name('club');


//Route::view('/blog','web\posts')->name('blog');

Route::get('/blog','FrontController@index')->name('blog');
Route::get('post/{slug}','FrontController@post');



Route::view('/contacto','contacto')->name('contacto');


Route::post('/contacto','MessageController@store')->name('messages.store');

Route::resource('categories','CategoryController');




Route::middleware(['auth'])->group(function () {
    Route::resource('posts', 'PostController');
    
 });


Auth::routes(['register' => false]);