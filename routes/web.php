<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/singers', 'SingerController@singers')->name('singer-list');
Route::get('/singer/{singer}', 'SingerController@singerDisks')->name('singer-disks');
Route::resource('/disk', 'DiskController', ['except' => 'show']);