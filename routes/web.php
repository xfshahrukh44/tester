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

Route::view('/category', 'admin/dashboard/category/category_create');
Route::view('/category2', 'admin/dashboard/category/category_list');
Route::view('/category3', 'admin/dashboard/category/category_update');
Route::view('/category4', 'admin/dashboard/category/category_delete');


// Route::view('/admin', 'admin/dashboard/product/product_create');
// Route::view('/admin2', 'admin/dashboard/product/product_list');
// Route::view('/admin3', 'admin/dashboard/product/product_update');
// Route::view('/admin4', 'admin/dashboard/product/product_delete');

Route::view('/dashboard', 'admin/dashboard/index');
Route::view('/role', 'admin/dashboard/role/role_create');
Route::view('/role2', 'admin/dashboard/role/role_list');
Route::view('/role3', 'admin/dashboard/role/role_update');
Route::view('/role4', 'admin/dashboard/role/role_delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('product', 'ProductMasterController');

//Route::group(['middleware' => ['auth']], function () {

// });