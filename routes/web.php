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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


 Route::group(['prefix' => 'admin' ], function(){
//Route::group(['prefix' => 'admin','middleware' => 'auth:admin' ], function(){
    
    
//Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    
    //Auth::routes();

    //home
    Route::get('home', 'Admin\HomeController@index')->name('admin.home');
    
    //login logout
        Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
        Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login');
        Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
        
        // //register
        Route::get('register', 'Admin\Auth\RegisterController@showRegisterForm')->name('admin.register');
        Route::post('register', 'Admin\Auth\RegisterController@register')->name('admin.register');
        
        //product
        Route::get('create','Admin\ProductController@add')->name('addmin.create');
        Route::post('create','Admin\ProductController@create')->name('addmin.create');
        Route::get('itiran','Admin\ProductController@index')->name('admin.itiran');
        Route::get('edit','Admin\ProductController@edit')->name('admin.edit');
        Route::post('edit','Admin\ProductController@update')->name('admin.update');
        Route::get('delete','Admin\ProductController@delete')->name('admin.delete');
});
Route::get('/','ProductController@index');
Route::post('/charge', 'ChargeController@charge');

//  Route::get('/','UenocoffeeController@base');
//  route::get('store.html','UenocoffeeController@store');
// route::get('products.html','UenocoffeeController@product');