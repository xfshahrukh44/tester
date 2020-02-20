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


Route::view('/role', 'admin/dashboard/role/role_create');
Route::view('/role2', 'admin/dashboard/role/role_list');
Route::view('/role3', 'admin/dashboard/role/role_update');
Route::view('/cat', 'ProductMasterController@categoryName');

Route::get('/dashboard', 'ProductMasterController@categoryName');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('product', 'ProductMasterController');
Route::resource('category', 'ProductCategoryController');


//Route::group(['middleware' => ['auth']], function () {

// });