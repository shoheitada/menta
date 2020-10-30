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
Route::post('/view/Login' , 'LoginController@Login');
Route::get('/view/Register' ,'Registercontroller@Register');
Route::post('/view/Register' ,'Registercontroller@Confirm');
Route::post('/view/Home' ,'Homecontroller@Home');
