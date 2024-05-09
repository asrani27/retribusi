<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/logout', 'LoginController@logout');
Route::get('/', 'LoginController@loginhome');
Route::post('/login', 'LoginController@login');
Route::get('/login', 'LoginController@loginhome')->name('login');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/blok', 'BlokController@index');
    Route::get('/blok/add', 'BlokController@add');
    Route::get('/blok/edit/{id}', 'BlokController@edit');
    Route::get('/blok/delete/{id}', 'BlokController@delete');
    Route::post('/blok/add', 'BlokController@save')->name('blok');
    Route::post('/blok/edit/{id}', 'BlokController@update')->name('editblok');

    Route::get('/kios', 'KiosController@index');
    Route::get('/kios/add', 'KiosController@add');
    Route::get('/kios/edit/{id}', 'KiosController@edit');
    Route::get('/kios/delete/{id}', 'KiosController@delete');
    Route::post('/kios/add', 'KiosController@save')->name('kios');
    Route::post('/kios/edit/{id}', 'KiosController@update')->name('editkios');

    Route::get('/los', 'losController@index');
    Route::get('/los/add', 'losController@add');
    Route::get('/los/edit/{id}', 'losController@edit');
    Route::get('/los/delete/{id}', 'losController@delete');
    Route::post('/los/add', 'losController@save')->name('los');
    Route::post('/los/edit/{id}', 'losController@update')->name('editlos');

    Route::get('/jenis', 'JenisController@index');
    Route::get('/jenis/add', 'JenisController@add');
    Route::get('/jenis/edit/{id}', 'JenisController@edit');
    Route::get('/jenis/delete/{id}', 'JenisController@delete');
    Route::post('/jenis/add', 'JenisController@save')->name('jenis');
    Route::post('/jenis/edit/{id}', 'JenisController@update')->name('editjenis');

    Route::get('/pedagang', 'PedagangController@index');
    Route::get('/pedagang/add', 'PedagangController@add');
    Route::get('/pedagang/edit/{id}', 'PedagangController@edit');
    Route::get('/pedagang/delete/{id}', 'PedagangController@delete');
    Route::post('/pedagang/add', 'PedagangController@save')->name('pedagang');
    Route::post('/pedagang/edit/{id}', 'PedagangController@update')->name('editpedagang');

    Route::get('/pegawai', 'PegawaiController@index');
    Route::get('/pegawai/add', 'PegawaiController@add');
    Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
    Route::get('/pegawai/delete/{id}', 'PegawaiController@delete');
    Route::post('/pegawai/add', 'PegawaiController@save')->name('pegawai');
    Route::post('/pegawai/edit/{id}', 'PegawaiController@update')->name('editpegawai');

    Route::get('/retribusi', 'RetribusiController@index');
    Route::get('/retribusi/add', 'RetribusiController@add');
    Route::get('/retribusi/edit/{id}', 'RetribusiController@edit');
    Route::get('/retribusi/delete/{id}', 'RetribusiController@delete');
    Route::post('/retribusi/add', 'RetribusiController@save')->name('retribusi');
    Route::post('/retribusi/edit/{id}', 'RetribusiController@update')->name('editretribusi');


    Route::get('/peralihan', 'PeralihanController@index');
    Route::get('/peralihan/add', 'PeralihanController@add');
    Route::get('/peralihan/edit/{id}', 'PeralihanController@edit');
    Route::get('/peralihan/delete/{id}', 'PeralihanController@delete');
    Route::post('/peralihan/add', 'PeralihanController@save')->name('peralihan');
    Route::post('/peralihan/edit/{id}', 'PeralihanController@update')->name('editperalihan');


    Route::get('/registrasi', 'registrasiController@index');
    Route::get('/registrasi/add', 'registrasiController@add');
    Route::get('/registrasi/edit/{id}', 'registrasiController@edit');
    Route::get('/registrasi/delete/{id}', 'registrasiController@delete');
    Route::post('/registrasi/add', 'registrasiController@save')->name('registrasi');
    Route::post('/registrasi/edit/{id}', 'registrasiController@update')->name('editregistrasi');

    Route::get('/user', 'UserController@index');
    Route::get('/user/add', 'UserController@add');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::get('/user/delete/{id}', 'UserController@delete');
    Route::post('/user/add', 'UserController@save')->name('user');
    Route::post('/user/edit/{id}', 'UserController@update')->name('edituser');

    Route::get('/laporan', 'LaporanController@index');
    Route::get('/laporan/pedagang', 'LaporanController@pedagang');
    Route::get('/laporan/pegawai', 'LaporanController@pegawai');
    Route::get('/laporan/kios', 'LaporanController@kios');

    Route::get('/laporan/periode', 'LaporanController@periode');
});
