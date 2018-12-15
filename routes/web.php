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

Route::get('/', "ArticlesController@index");

Auth::routes();
Route::get('articles',"ArticlesController@index");

Route::group(['middleware'=>['is_admin']],function (){
    Route::get('articles/create','ArticlesController@createArticle');
    Route::post('articles/create','ArticlesController@storeArticle');

});


Route::group(['middleware'=>['auth']],function (){
    Route::post('articles/{id}','CommentsController@storeComment');
});

Route::get('articles/{id}','ArticlesController@viewArticle');
Route::get('/home', 'HomeController@index')->name('home');

