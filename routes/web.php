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
Route::get('/jobs/create', 'JobController@create')->name('jobs.create')->middleware('auth');
Route::post('/jobs/store', 'JobController@store')->name('jobs.store')->middleware('auth');
Route::get('/jobs/edit/{id}', 'JobController@edit')->name('jobs.edit')->middleware('auth');
Route::put('/jobs/update/{id}', 'JobController@update')->name('jobs.update')->middleware('auth');
Route::get('/jobs', 'JobController@index')->name('jobs.index');
Route::get('/jobs/{id}', 'JobController@show')->name('jobs.show');
Route::delete('jobs/delete/{id}', 'JobController@destroy' )->name('jobs.delete');

//Companies
Route::get('/companies/create', 'CompanyController@create')->name('companies.create')->middleware('auth');
Route::post('/companies/store', 'CompanyController@store')->name('companies.store')->middleware('auth');
Route::get('/companies/edit/{id}', 'CompanyController@edit')->name('companies.edit')->middleware('auth');
Route::put('/companies/update/{id}', 'CompanyController@update')->name('companies.update')->middleware('auth');
Route::get('/companies', 'CompanyController@index')->name('companies.index');
Route::get('/companies/{id}', 'CompanyController@show')->name('companies.show');
Route::delete('companies/delete/{id}', 'CompanyController@destroy' )->name('companies.delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

