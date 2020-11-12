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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/' , 'LoginController@Login');
Route::post('/login' , 'LoginController@Login');
Route::get('/view/register' ,'RegisterController@Register');
Route::post('/view/register' ,'RegisterController@Register');
Route::post('/view/confirm' ,'RegisterController@Confirm');
Route::get('/view/home' ,'HomeController@Home');
