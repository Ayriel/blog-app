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

// Rutas del front
Auth::routes();


Route::get('/', 'FrontController@index')->name('welcome');

// Route::view('/test', 'test');
Route::get('/inicio', 'HomeController@index')->name('inicio');

Route::get('categories/{name}', 'FrontController@searchCategory')->name('search.category');
Route::get('tags/{name}', 'FrontController@searchTag')->name('search.tags');

Route::get('articles/{slug}', 'FrontController@viewArticle')->name('view.article');;


Route::view('/test', 'test');


// Rutas del panel de admin

Route::prefix('admin')->group(function () {


    Route::resource('users', 'UserController');
    Route::get('users/{id}/destroy', 'UserController@destroy')->name('users.destroy');

    Route::resource('categories', 'CategoriesController');
    Route::get('categories/{id}/destroy', 'CategoriesController@destroy')->name('categories.destroy');

    Route::resource('tags', 'TagsController');
    Route::get('tags/{id}/destroy', 'tagsController@destroy')->name('tags.destroy');

    Route::resource('articles', 'ArticlesController');
    Route::get('articles/{id}/destroy', 'ArticlesController@destroy')->name('articles.destroy');


    Route::get('images', 'ImagesController')->name('images.index');


});



