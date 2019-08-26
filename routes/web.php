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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('patient.index');
});
Route::get('/media', function () {
    return view('media');
})->name('media');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/user', 'UserController');
Route::post('/user-list', 'UserController@list')->name('user.list');
/*patient*/
Route::resource('/patient','PatientController');
Route::post('/patient-list','PatientController@list')->name('patient.list');
/*echo*/
Route::resource('/echo','EchoController');
Route::get('/echo-print-page/{id}','EchoController@_print')->name('echo.print');
Route::resource('/echo-template','EchoTemplateController');
Route::post('/echo-template-search','EchoTemplateController@search')->name('echo.template.search');
/*labor*/
Route::resource('/labor','LaboController');
Route::get('/labor-print-page/{id}','LaboController@_print')->name('labor.print');
