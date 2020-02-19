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

Route::view('/admin', 'admin/dashboard/product/product');
Route::view('/admin2', 'admin/dashboard/product/product_list');
Route::view('/dashboard', 'admin/dashboard/index');
Route::view('/role', 'admin/dashboard/role/role');
Route::view('/role2', 'admin/dashboard/role/role_list');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::group(['middleware' => ['auth']], function () {

// });