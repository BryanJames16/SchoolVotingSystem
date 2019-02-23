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

Route::get('/master', function () {
    return view('master.master');
});

Route::group(['prefix' => '/a93e57s/{locale}'], function () { 
    
    Route::get('/', function ($locale) {
        App::setLocale($locale);
        return view('master.master');
    });

    Route::get('/admin', function ($locale) {
        App::setLocale($locale);
        return view('master.admin');
    });

});

Route::group(['prefix' => '/admin/{locale}'], function () { 
    
    Route::get('/dashboard', function ($locale) {
        App::setLocale($locale);
        return view('admin.dashboard');
    });

});
