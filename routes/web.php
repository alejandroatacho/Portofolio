<?php

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

/*Main page navbars routes*/
Route::get('/', 'PagesController@Home');
Route::get('/indexprojects', 'PagesController@indexprojects');
Route::get('/skills', 'PagesController@skills');
Route::get('/about', 'PagesController@about');

/* Project routes*/
Route::get('/nokiagame', 'PagesController@nokiagame');
Route::get('/transition', 'PagesController@transition');
Route::get('/cssa', 'PagesController@cssa');