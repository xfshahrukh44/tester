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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function () {
    Route::view('/createorder', 'admin/dashboard/order/create_order');
    Route::view('/createcategory', 'admin/dashboard/product/create_category');
    Route::view('/createproduct', 'admin/dashboard/product/create_product');
    Route::view('/createrole', 'admin/dashboard/role/create_role');
    Route::view('/roles', 'admin/dashboard/role/role_list');
    Route::view('/createwarehouse', 'admin/dashboard/warehouse/create_warehouse');
    Route::view('/', 'admin/dashboard/index');
});

Route::resource('product', 'ProductMasterController');

Route::resource('category', 'ProductCategoryController');

Route::resource('warehouse', 'WarehouseController');

Route::get('/test', 'ProductMasterController@test');

// Route::group(['middleware' => ['auth', 'role:admin']], function(){
//     Route::get('dashboard/download/{id}', 'DashboardController@downloadCourse')->name('abc');
// });
