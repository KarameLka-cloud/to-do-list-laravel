<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts.index');

Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('post.create');

Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('post.store');

Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show')->name('post.show');

Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostController@edit')->name('post.edit');

Route::patch('/post/{post}', 'App\Http\Controllers\PostController@update')->name('post.update');

Route::delete('/posts/{post}', 'App\Http\Controllers\PostController@destroy')->name('post.destroy');
