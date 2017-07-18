<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
    'uses'=>'PostController@getIndex',
    'as'=>'blog.index'
]);

Route::get('post/{id}', [
    'uses' => 'PostController@getPost',
    'as' => 'blog.index'
]);

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function() {
    Route::get('', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('create',[
       'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.index'
    ]);

    Route::post('create', [
       'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::get('edit/{id}', [
       'uses' => 'PostController@getAdminEdit',
        'uses' => 'admin.edit'
    ]);

    Route::post('edit', [
        'uses' => 'PostController@postAdminUpdate',
        'as' => 'admin.update'
    ]);
});