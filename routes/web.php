<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'BerandaController@index');
Route::get('/tentang_kami', 'TentangController@index');
Route::get('/karir', 'KarirController@index');
Route::get('/berita', 'BeritaController@index');
Route::get('/pesan', 'PesanController@index');
Route::get('/karir/daftar', 'KarirController@daftar')->name('karir');
Route::post('/karir/daftar', 'KarirController@pelamar')->name('pelamar');

// Route::get('/', 'FrontendController@index')->name('welcome');

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function () {

    Route::get('/admin/home', 'HomeController@index')->name('dashboard');

    //Karir
    Route::get('/admin/Lowongan', 'LowonganController@index')->name('lowongan');
    Route::post('/admin/tambah/karir', 'LowonganController@store')->name('store.lowongan');

    // Pelamar
    Route::get('/admin/pelamar', 'LowonganController@pelamar')->name('admin.pelamar');
    Route::get('/admin/pelamar/{id}', 'LowonganController@show')->name('show.pelamar');

    //Gambar
    Route::get('/admin/gambar', 'GambarController@index')->name('home.gambar');
    Route::post('/admin/gambar', 'GambarController@store')->name('store.gambar');
    Route::get('/admin/gambar/show/{id}', 'GambarController@show')->name('show.gambar');

    Route::get('/admin/berita', 'BeritaController@berita')->name('berita');
    Route::post('/admin/berita', 'BeritaController@store')->name('store.berita');
});
