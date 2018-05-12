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


Route::get('/', 'PagesController@index');
Route::get('/about-us', 'PagesController@getAbout')->name('about us');
Route::get('/project', 'PagesController@getProject')->name('project');
Route::get('/project/single', 'PagesController@getProjectSingle')->name('project single');

Route::get('/contact', 'PagesController@getContact')->name('contact');
Route::get('/blog', 'PagesController@getBlog')->name('blog');
Route::get('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->middleware('auth');


Auth::routes();
