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
<<<<<<< HEAD
   // return view('welcome');
	

});
//Route::resource('orders','OderController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
  // return view('welcome');
	
});
Route::get('/','PageController@homefun')->name('homepage');
Route::get('abouts','PageController@aboutfun')->name('aboutpage');
Route::get('contacts','PageController@contactfun')->name('contactpage');


>>>>>>> 1d4dc18327104ee452fb59e160172818238a8ec0
