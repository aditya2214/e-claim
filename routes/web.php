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
Route::get('/logout', function () {
    Auth::logout();
    return view('auth.login');
});

//kehalaman Registrasi Claim
Route::get('/registrasi_klaim', function () {
        
    return view('konten.registrasi_klaim');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/registrasi_klaim/save', 'RegistrationClaimController@store');
Route::get('/check_claim', 'RegistrationClaimController@check');
