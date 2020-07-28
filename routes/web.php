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
Route::get('/Aboutus',function(){
	return view('Aboutus');
});
Route::get('/header',function(){
	return view('header');
});
Route::get('/footer',function(){
	return view('footer');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/employee/index', 'employeeController@index')->name('employee.index');
Route::get('/employee/{id}/edit','employeeController@edit')->name('employee.edit');
Route::get('/employee/{id}/delete','employeeController@destroy')->name('employee.destroy');
Route::get('/employee/create','employeeController@create')->name('employee.create');
Route::post('/create','employeeController@store')->name('employee.store');
Route::post('/employee/update','employeeController@update')->name('employee.update');