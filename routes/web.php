<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('contacts', 'ContactController');
Route::resource('/edit', 'ContactController@edit');
Auth::routes();

// Route::get('/contacts', 'ContactController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

