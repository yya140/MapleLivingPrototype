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
Route::get('/backHome', 'BackendController@backHome')->middleware('auth');
Route::get('/createHousing', 'HousingController@createHousing')->middleware('auth');
Route::post('/saveHousing', 'HousingController@saveHousing')->middleware('auth');
Route::post('/updateHousing', 'HousingController@updateHousing')->middleware('auth');
Route::get('/modifyHousing', 'HousingController@modifyHousing')->middleware('auth');
