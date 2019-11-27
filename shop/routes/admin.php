<?php
Route::get('/loginform', 'AuthController@showLoginForm')->name('loginform');
Route::post('/signin', 'AuthController@login')->name('signin');
Route::post('/logout', 'AuthController@logout')->name('logout')->middleware('auth');