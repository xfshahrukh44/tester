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
    Route::view('/addcategory', 'admin/dashboard/add_category');
    Route::view('/addproduct', 'admin/dashboard/add_product');
    Route::view('/addwarehouse', 'admin/dashboard/add_warehouse');
    Route::view('/createorder', 'admin/dashboard/create_order');
});

// Route::group(['middleware' => ['auth', 'role:admin']], function(){
//     Route::get('dashboard/download/{id}', 'DashboardController@downloadCourse')->name('abc');
// });
