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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/courses', 'HomeController@courses')->name('courses');
<<<<<<< HEAD
Route::get('/courseCreate', 'HomeController@courseCreate')->name('courseEntry');
=======
// Route::get('/teacher', 'HomeController@teacher')->name('teacher');
>>>>>>> a14371255f72236465003dbd7a3853f64a80e6c5
