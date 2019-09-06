<?php

use Illuminate\Support\Facades\Route;

Route::get('{hash}', 'UrlRedicectorController');

Route::post('urls', 'UrlsController@store')->name('urls.store');
Route::get('urls/{url}', 'UrlsController@show')->name('urls.show');
Route::get('/', 'HomeController');
