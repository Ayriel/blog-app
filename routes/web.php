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

// Route::get('/', 'PagesController@inicio');

// Route::view('/', 'welcome')->name('welcome');


Route::prefix('admin')->group(function () {
    Route::resource('users', 'UserController');
    Route::get('users/{id}/destroy', 'UserController@destroy')->name('users.destroy');

    Route::resource('categories', 'CategoriesController');
    Route::get('categories/{id}/destroy', 'CategoriesController@destroy')->name('categories.destroy');
});


// Route::group(['prefix' => 'admin'], function () {
//     Route::resource('users', 'UserController');
// });


