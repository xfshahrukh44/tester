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

<<<<<<< HEAD
Route::view('/admin', 'admin/dashboard/index');
Route::view('/admin2', 'admin/dashboard/index2');
Route::view('/admin3', 'admin/dashboard/index3');
=======
Route::get('/admin2', function(){
    return view('admin/index2');
});

Route::view('/admin', 'admin/layouts/app');
Route::view('/admin2', 'admin/index2');
Route::view('/admin3', 'admin/index3');
>>>>>>> d8acdbd0daea84b6c4ff0712ea271c97c78029ba

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['auth']], function () {

// });