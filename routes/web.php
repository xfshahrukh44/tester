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
    
    Route::resource('product', 'ProductMasterController');

    Route::resource('category', 'ProductCategoryController');

    Route::resource('warehouse', 'WarehouseController');

    Route::resource('order', 'OrderMasterController');

    Route::resource('role', 'RoleController');

    Route::resource('user', 'UserController');

});


// Route::get('/test', 'ProductMasterController@test');

// Route::group(['middleware' => ['auth', 'role:sssss']], function(){
//     Route::resource('warehouse', 'WarehouseController');
// });
