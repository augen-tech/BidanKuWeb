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
    // return view('welcome');
    return view('dashboard');
});

Route::get('/patient/form/', 'PatientController@Form') ->name('patient.form');
Route::get('/patient/list/', 'PatientController@ShowList') ->name('patient.list');

Route::post('/logout', 'UserController@postLogout')->name('postLogout');
