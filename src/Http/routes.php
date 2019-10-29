<?php
Route::get('/', 'WunitController@index');
Route::post('/', 'WunitController@store')->name('wunit.store');