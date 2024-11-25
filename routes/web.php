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
    error_log('Some message here.');
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->middleware('auth')->name('dashboard');

Route::middleware([])->group(function() {
    Route::get('/admin/users', 'Admin\UserController@index')->name('admin.users.index');
    // Route::get('/admin/users/create', 'Admin\UserController@create')->name('admin.users.create');
    Route::post('/admin/users', 'Admin\UserController@store')->name('admin.users.store');
    // Route::get('/admin/users/{user}/edit', 'Admin\UserController@edit')->name('admin.users.edit');
    // Route::put('/admin/users/{user}', 'Admin\UserController@update')->name('admin.users.update');
    // Route::delete('/admin/users/{user}', 'Admin\UserController@destroy')->name('admin.users.destroy');
});