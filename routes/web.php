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




Route::get('/', [
    'uses'=>'RegistrationController@home',
    'as'=> 'home',
]);

Route::get('/register', [
    'uses'=>'RegistrationController@index',
    'as'=> 'register.index',
]);

Route::get('/success', function () {
    return view('thanks');
});


Route::post('/register', [
    'uses'=>'RegistrationController@create',
    'as'=> 'register.create',
]);

Route::get('/registerUser', [
    'uses'=>'regController@index',
    'as'=> 'reg.index',
]);

Route::post('/registerUser', [
    'uses'=>'regController@store',
    'as'=> 'reg.store',
]);

Route::get('/NoUser', function () {
    return view('NoUser');
});

Route::get('/login', [
    'uses'=>'UserController@show',
    'as'=> 'user.login',
    ]);

Route::post('/login', [
    'uses'=>'UserController@store',
    'as'=> 'user.store',
    ]);


Route::get('/UserTableDB', [
    'uses'=>'RegistrationController@showla',
    'as'=> 'user.index',
    'name' => 'home',
    ]);



