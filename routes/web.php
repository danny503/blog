<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GhestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entries/create', 'EntryController@create');
Route::post('/entries', 'EntryController@store');
