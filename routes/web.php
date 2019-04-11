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

Route::get('/patient/create/', 'PatientController@Create') ->name('patient.create');
Route::get('/patient/index/', 'PatientController@Index') ->name('patient.index');
Route::post('/patient/store/', 'PatientController@Store') ->name('patient.store');

Route::get('/pregnancy/create/', 'PregnancyController@Create') ->name('pregnancy.create');
Route::get('/pregnancy/index/', 'PregnancyController@Index') ->name('pregnancy.index');

Route::get('/healthNote/create/', 'HealthNoteController@Create') ->name('healthNote.create');
Route::get('/healthNote/index/', 'HealthNoteController@Index') ->name('healthNote.index');

Route::get('/helper/create/', 'HelperController@Create') ->name('helper.create');
Route::get('/helper/index/', 'HelperController@Index') ->name('helper.index');
Route::post('/helper/store/', 'HelperController@Store') ->name('helper.store');

Route::post('/logout', 'UserController@postLogout')->name('postLogout');
