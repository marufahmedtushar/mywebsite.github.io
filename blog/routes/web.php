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






Route::group(['middleware' => ['auth','admin']],function() {


    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/users','AdminController@users');
    Route::get('/projects','AdminController@projects');
    Route::get('/skills','AdminController@skills');
    Route::get('/uploadproject','AdminController@uploadproject');
    Route::get('/uploadskill','AdminController@uploadskill');
    Route::put('/projectupload','AdminController@store');
    Route::put('/skillupload','AdminController@save');

});

Auth::routes();

Route::get('/','IndexController@index');
