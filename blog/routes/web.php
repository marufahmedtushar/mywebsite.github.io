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



Route::group(['middleware' => ['auth','user']],function() {
Route::get('/','IndexController@index');
Route::get('/home','HomeController@index');
});
Route::group(['middleware' => ['auth','admin']],function() {


    Route::get('/dashboard','AdminController@dashboard');

    Route::get('/users','AdminController@users');
    Route::get('/userroleedit/{id}','AdminController@userroleedit');
    Route::get('/userroleview/{id}','AdminController@userroleview');
    Route::put('/userroleupdate/{id}','AdminController@userroleupdate');
    Route::delete('/userdelete/{id}','AdminController@userdelete');


    Route::get('/projects','AdminController@projects');
    Route::get('/uploadproject','AdminController@uploadproject');
    Route::put('/projectupload','AdminController@store');
    Route::get('/project/{id}/edit','AdminController@projectedit');
    Route::put('/update/{id}','AdminController@updateproject');
    Route::delete('/projectdelete/{id}','AdminController@projectdelete');


    Route::get('/skills','AdminController@skills');
    Route::put('/skillupload','AdminController@save');
    Route::get('/uploadskill','AdminController@uploadskill');
    Route::get('/skill/{id}/edit','AdminController@skilledit');
    Route::put('/updateskill/{id}','AdminController@updateskill');
    Route::delete('/skilldelete/{id}','AdminController@skilldelete');

    
    
    Route::get('/contact','AdminController@contactlist');
    Route::get('/contact/{id}','AdminController@contactview');
    Route::delete('/contactdelete/{id}','AdminController@contactdelete');

   


    


});

Auth::routes();

Route::get('/','IndexController@index');
Route::post('/contact','IndexController@contact');
Route::get('/register-new', function () {
    return view('newregister');
});
Route::get('/login-new', function () {
    return view('newlogin');
});