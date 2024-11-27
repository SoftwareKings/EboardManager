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
    Route::post('/admin/users', 'Admin\UserController@store')->name('admin.users.store');
    Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard.index');
    // Route::get('/admin/projects', 'Admin\UserController')
});