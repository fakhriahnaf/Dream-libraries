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
Route::get('/biografi', function () {
  return redirect('biografi');
});
Route::get('cv', function () {
  return view('cv');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('mahasiswas', 'MahasiswaController');

Route::resource('bukus', 'BukuController');


Route::resource('merchants', 'merchantController');


Route::get('/cv', function () {
  return view('cv/cv');
});
Route::get('/chart', function () {
  return view('chart');
});
Route::get('/hai', function () {
  return view('hai/hai','AdminController@home');
});

Route::resource('$mahasiswas', '$mahasiswaController');

Route::resource('mahasiswas', 'mahasiswaController');

Route::resource('bukus', 'BukuController');

Route::resource('peminjams', 'PeminjamController');



Route::post('/modal_create', 'AdminController@modal_create');
Route::post('/modal_edit', 'AdminController@modal_edit');
Route::post('/modal_delete', 'AdminController@modal_delete');
Route::post('/do_create', 'AdminController@do_create');    
Route::post('/do_edit/{id}', 'AdminController@do_edit');
Route::post('/do_delete', 'AdminController@do_delete');
Route::get('/chartjs', 'AdminController@chartjs');