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

Route::get('/photos/addPhoto',"Admin\PhotoController@addPhoto");

// Route::get('/admin/categories',"Admin\PhotoController@index");

Route::get('/photos/index',"Admin\PhotoController@index");

Route::post('/photos/index','Admin\PhotoController@store');

Route::delete('/photos/index/{id}','Admin\PhotoController@delete');

Route::get('/photos/index/{id}/editPhoto','Admin\PhotoController@editPhoto');



Route::get('/tags/index',"Admin\TagController@index");

Route::get('/tags/addTags',"Admin\TagController@addTags");

Route::post('/tags/index','Admin\TagController@store');

Route::delete('/tags/index/{id}','Admin\TagController@delete');

Route::get('/tags/index/{id}/edit','Admin\TagController@edit');

Route::patch('/tags/index/{id}','Admin\TagController@update');


Route::get('/category/index',"Admin\CategoryController@index");

Route::get('/category/addCategory',"Admin\CategoryController@addCategory");

Route::post('/category/index','Admin\CategoryController@store');

Route::delete('/category/index/{id}','Admin\CategoryController@delete');


Route::get('/category/index/{id}/edit','Admin\CategoryController@edit');

Route::patch('/category/index/{id}','Admin\CategoryController@update');