<?php


Route::get('/', 'HomeController@index')->name('home');
Route::get('/shirts', 'HomeController@shirts')->name('shirts');
