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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/clear-cache', function() {
    $exitCode1 = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('optimize');
    $exitCode3 = Artisan::call('route:cache');
    $exitCode4 = Artisan::call('view:clear');
    $exitCode5 = Artisan::call('config:cache');
     return "done!!";
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::resource('jobs', 'jobsController');

Route::resource('jobs', 'jobsController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('jobs', 'jobsController');

Route::resource('quotes', 'quotesController');

Route::resource('quotes', 'quotesController');

Route::resource('profiles', 'profileController');

Route::resource('vehicles', 'vehiclesController');

Route::resource('myjobs', 'myjobsController');