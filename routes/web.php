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

// Custom routes
Route::get('/employees', 'EmployeeController@display');
Route::post('/employee/delete', 'EmployeeController@deleteAction');

// Insert an employee
Route::get('/employee/new', 'EmployeeController@insertForm');
Route::post('/employee/new', 'EmployeeController@insertAction');

// Update an employee
Route::get('/employee/update', 'EmployeeController@updateForm');
Route::post('/employee/update', 'EmployeeController@updateAction');

// Base route
Route::get('/{all?}', 'NavigationController@showPage');