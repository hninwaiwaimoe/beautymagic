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


Route::get('main', 'PageController@mainfun')->name('mainpage');
Route::resource('foodtypes','FoodtypeController');
Route::resource('foods','FoodController');
Route::resource('plans','PlanController');
Route::resource('packages','PackageController');
 Route::get('packagedetail/{id}','PageController@packagedetail')->name('packagedetail');
Route::get('buypackage/{id}','PackagedetailController@buypackage')->name('buypackage');
//Route::resource('orders','OderController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

  // return view('welcome');
	
Route::get('/','PageController@homefun')->name('homepage');
Route::get('abouts','PageController@aboutfun')->name('aboutpage');
Route::get('contacts','PageController@contactfun')->name('contactpage');
Route::get('loginform', 'PageController@loginfun')->name('loginpage');
Route::get('registerform', 'PageController@registerfun')->name('registerpage');
Route::get('planform', 'PageController@planfun')->name('planpage');
Route::get('calculators', 'PageController@bmifun')->name('bmipage');
Route::get('exercises', 'PageController@exercisefun')->name('exercisepage');
Route::get('dietplans', 'PageController@dietplanfun')->name('dietplanpage');
Route::get('planpackage/{id}','PageController@planpackage')->name('planpackage');
Route::get('morepackage/{id}','PageController@morepackage')->name('morepackage');