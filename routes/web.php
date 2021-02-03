<?php


Route::get('/', 'HomeController@index')->name('home');


Route::get('/create-new-article', 'ArticleController@create')->name('articles.create');

Route::post('/create-new-article', 'ArticleController@store')->name('articles.store');