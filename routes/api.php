<?php

use Illuminate\Http\Request;

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

Route::group(['middleware'=>['api']],function (){
    Route::get('/articles/{id}/comments','CommentsController@getArticleComments');
    Route::get('/articles',"ArticlesController@getAllArticles");
    Route::post('/comments/create','CommentsController@storeComment');
    Route::get('/categories','CategoriesController@getAllCategories');
    Route::get('/articles/filter',"ArticlesController@filterArticles");
});

//Route::options('{any?}', function (){
//    return response('',200);
//})->where('any', '.*');
