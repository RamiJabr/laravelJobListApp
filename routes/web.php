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

//Jobs
Route::post('/jobs', 'JobController@create')->name('jobs.create');
Route::put('/jobs/{id}', 'JobController@update')->name('jobs.update');
Route::get('/jobs', 'JobController@index')->name('jobs.index');
Route::get('/jobs/{id}', 'JobController@show')->name('jobs.show');

//Companies
Route::post('/companies', 'CompanyController@create')->name('companies.create');
Route::put('/companies/{id}', 'CompanyController@update')->name('companies.update');
Route::get('/companies', 'CompanyController@index')->name('companies.index');
Route::get('/companies/{id}', 'CompanyController@show')->name('companies.show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

