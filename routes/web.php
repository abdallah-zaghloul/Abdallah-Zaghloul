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

Route::group(['middleware'=>'auth:admin','namespace'=>'Controllers'],function (){
    Route::get('companies','CompanyController@index')->name('companies.index');
    Route::get('employees','EmployeeController@index')->name('employees.index');
});

