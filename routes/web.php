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

Route::get('/helloWorld', function () {
    return view('helloWorld');
});

Route::get('/form', function () {
    return view('form'); //sama aja kayak function yg all
});

Route::post('/register', "UserController@register");

Route::get('/all',"UserController@all");

//Route::get('/user/{id}',"UserController@find");

Route::get('/detailForm/{id}',"UserController@find");

Route::get('/delete/{id}',"UserController@delete");

Route::post('goupdate/{id}',"UserController@goupdate");


?>
