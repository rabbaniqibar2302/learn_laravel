<?php


Route::get('/', 'HomeController@index')->name('home');

Route::get('/about' , 'PageController@about')->name('pages.about');

Route::get('/contact' , 'PageController@contact')->name('pages.contact');