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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', 'AuthenticationController@login')->name('login');
Route::get('/register', 'AuthenticationController@register')->name('register');
Route::get('/logout', 'AuthenticationController@logout')->name('logout');

Route::post('/registerProcess', 'AuthenticationController@registerProcess')->name('register.process');
Route::post('/loginProcess', 'AuthenticationController@loginProcess')->name('login.process');

Route::group(['middleware' => 'auth.login'], function(){

    Route::group(['prefix' => 'franchise'], function(){
        Route::get('/', 'FranchiseController@index')->name('franchise.index');
        Route::get('/create', 'FranchiseController@create')->name('franchise.create');
    });

    Route::group(['prefix' => 'brands'], function(){
        Route::get('/', 'BrandController@index')->name('brand.index');
        Route::get('/create', 'BrandController@create')->name('brand.create');
        Route::post('/store', 'BrandController@store')->name('brand.store');
        Route::get('/edit/{id}', 'BrandController@edit')->name('brand.edit');
        Route::post('/update/{id}', 'BrandController@update')->name('brand.update');
        Route::get('/delete', 'BrandController@delete')->name('brand.delete');
    });

});