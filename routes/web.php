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


Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/home', 'FrontendController@index')->name('home');

//BackendController
Route::get('/backHome', 'BackendController@backHome')->middleware('auth')->name('backHome');
Route::get('/createHousing', 'BackendController@createHousing')->middleware('auth');
Route::post('/saveHousing', 'BackendController@saveHousing')->middleware('auth')->name('saveHousing');
Route::post('/updateHousing', 'BackendController@updateHousing')->middleware('auth');
Route::get('/modifyHousing', 'BackendController@modifyHousing')->middleware('auth');
