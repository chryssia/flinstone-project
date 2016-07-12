<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/dashboard', 'RoutingController@showDashboard');
Route::get('/services', 'RoutingController@showListServices');
Route::get('/transaction', 'RoutingController@showListTransaction');
Route::delete('/services', 'RoutingController@showListServices');
Route::get('/services/add', 'RoutingController@showAddServices');
Route::post('/services/add', 'RoutingController@showAddServices');
Route::get('/contents', 'RoutingController@showAllContentServices');
Route::get('/content/subs/{id}', 'RoutingController@showContentSubs');
Route::get('/content/cod/{id}', 'RoutingController@editContentCOD');
Route::post('/content/cod/{id}', 'RoutingController@editContentCOD');
Route::get('/content/subs/{id}/add', 'RoutingController@addContentSubs');
Route::post('/content/subs/{id}/add', 'RoutingController@addContentSubs');
Route::get('/content/subs/edit/{id}', 'RoutingController@editContentSubs');
Route::post('/content/subs/edit/{id}', 'RoutingController@editContentSubs');
Route::get('/api', 'RoutingController@showAPIManagement');
Route::get('/code', 'RoutingController@showCode');
Route::post('/code', 'RoutingController@showCode');


Route::get('/', 'RoutingController@showLogin');
Route::post('/', 'RoutingController@showLogin');
Route::get('/pengguna','RoutingController@showPengguna');
Route::delete('/pengguna/{id}','RoutingController@showPengguna');
Route::get('/keluhan','RoutingController@showKeluhan');
Route::get('/keluhan/tambah','RoutingController@showTambahKeluhan');
Route::post('/keluhan/tambah','RoutingController@showTambahKeluhan');
Route::get('/keluhan/ubah/{id}','RoutingController@showUbahKeluhan');
Route::post('/keluhan/ubah/{id}','RoutingController@showUbahKeluhan');
Route::get('/pengguna/tambah','RoutingController@showTambahPengguna');
Route::post('/pengguna/tambah','RoutingController@showTambahPengguna');

Route::get('/pengguna/ubah/{id}','RoutingController@showUbahPengguna');
Route::post('/pengguna/ubah/{id}','RoutingController@showUbahPengguna');


