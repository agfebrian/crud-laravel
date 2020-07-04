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

// pertanyaan
Route::get('/', 'PertanyaanController@index')->name('pertanyaan.index');
Route::get('/pertanyaan', 'PertanyaanController@index')->name('pertanyaan.index');
Route::get('/pertanyaan/create', 'PertanyaanController@create')->name('pertanyaan.create');
Route::post('/pertanyaan', 'PertanyaanController@store')->name('pertanyaan.store');

// jawaban
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index')->name('jawaban.index');
Route::get('/jawaban/{pertanyaan_id}/create', 'JawabanController@create')->name('jawaban.create');
Route::post('/jawaban', 'JawabanController@store')->name('jawaban.store');
