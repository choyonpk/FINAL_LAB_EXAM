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

Route::get('/', function()
{
  
});
Route::get('/admin','adminController@index')->name('admin.home.index');

Route::get('/admin/create','adminController@create')->name('admin.create');
Route::post('/admin/create','adminController@addemployee');

Route::get('/admin/employeelist','adminController@employeelist')->name('admin.home.employeelist');

Route::get('/admin/edit/{id}','adminController@edit')->name('admin.home.edit');
Route::post('/admin/edit/{id}','adminController@update')->name('admin.home.edit');






