<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GhestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entries/create', 'EntryController@create');
Route::post('/entries', 'EntryController@store');
Route::get('/entries/{entryBySlug}', 'GhestController@show');
Route::get('/entries/{entry}/edit', 'EntryController@edit');
Route::put('/entries{entry}', 'EntryController@update');
Route::get('/@{user}', 'UserController@show');
