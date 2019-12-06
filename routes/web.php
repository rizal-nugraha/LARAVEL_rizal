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

Route::get('/hello', function () {
    return "Halo dunia apa kabar, ini laravel";
});

Route::get('/profile/{name}', 'UserController@profile');

Route::get('/tampil/{name}', 'UserController@tampil');
Route::post('/proses_tambah', 'CrudController@tambah_data');

Route::get('/read', function () {
    return view('read');
});