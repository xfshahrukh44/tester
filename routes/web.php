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

Route::get('/admin2', function(){
    return view('admin/index2');
});

Route::view('/admin', 'admin/index');
Route::view('/admin2', 'admin/index2');
Route::view('/admin3', 'admin/index3');
