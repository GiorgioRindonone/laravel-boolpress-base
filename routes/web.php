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

Route::get('/', 'BlogController@index')->name('guest.posts.index');
Route::get('posts/{slug}', 'BlogController@show')->name('guest.posts.show');

//cambio la route
//partendo dalla fine prima riga, abbiamo creato un gruppo di rotte, che condivide il namespace di Admin, avranno il nome prefissato con admin., 
Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){
    Route::resource('posts', 'PostController');
});
