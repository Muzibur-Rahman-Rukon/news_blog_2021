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

Route::get('/','PhotoController@index');
Route::get('/portfollio','PhotoController@portfollio');
Route::get('/service.java','PhotoController@service');
//Route::get('Name of blade pass here','this will call controller and function of HTTP Controller');

/*

Admin Route Start From Here

*/

Route::get('/admin_panel','AdminController@index');
Route::post('/admin_login_check','AdminController@admin_login_check');
Route::get('/dashboard','SuperAdminController@index');
Route::get('/logout','SuperAdminController@logout');
Route::get('/manage.java','SuperAdminController@manageSection');
Route::get('/addP.java','SuperAdminController@addP');
Route::post('/save_category','SuperAdminController@save_category');
Route::get('/unpublished_category/{id}','SuperAdminController@unpublished_category');
Route::get('/published_category/{id}','SuperAdminController@published_category');
Route::get('/delete_category/{id}','SuperAdminController@delete_category');
Route::get('/edit_category/{id}','SuperAdminController@edit_category');
Route::post('/update_category','SuperAdminController@update_category');
Route::get('/addBlog','SuperAdminController@addBlog');
Route::post('/save_blog','SuperAdminController@save_blog');








/*

Admin Route End Here

*/