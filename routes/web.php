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

Route::resource('$mahasiswas', '$mahasiswaController');

Route::resource('mahasiswas', 'mahasiswaController');

Route::resource('bukus', 'BukuController');

Route::resource('peminjams', 'PeminjamController');