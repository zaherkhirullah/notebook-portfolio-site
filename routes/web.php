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
    return view('home');
});



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/works', 'HomeController@works')->name('works');
Route::get('/education', 'HomeController@education')->name('education');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/languages', 'HomeController@languages')->name('languages');

// Auth::routes();
// Route::get('/home1', 'HomeController@index1')->name('home1');