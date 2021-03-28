<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/tokyo', 'LocationController@tokyo')->name('tokyo');
Route::get('/yokohama', 'LocationController@yokohama')->name('yokohama');
Route::get('/kyoto', 'LocationController@kyoto')->name('kyoto');
Route::get('/osaka', 'LocationController@osaka')->name('osaka');
Route::get('/sapporo', 'LocationController@sapporo')->name('sapporo');
Route::get('/nagoya', 'LocationController@nagoya')->name('nagoya');
