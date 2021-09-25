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

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
// Route::get('/system-management/{option}', 'SystemMgmtController@index');
Route::get('/profile', 'ProfileController@index');

Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');

Route::resource('employee-management', 'EmployeeManagementController');
Route::post('staff-management/search', 'EmployeeManagementController@search')->name('employee-management.search');

Route::resource('system-management/department', 'DepartmentController');
Route::post('system-management/department/search', 'DepartmentController@search')->name('department.search');

//Route::resource('system-management/division', 'DivisionController');
Route::post('system-management/title/search', 'DivisionController@search')->name('division.search');

Route::resource('system-management/country', 'CountryController');
Route::post('system-management/country/search', 'CountryController@search')->name('country.search');

Route::resource('system-management/state', 'StateController');
Route::post('system-management/state/search', 'StateController@search')->name('state.search');

Route::resource('system-management/city', 'CityController');
Route::post('system-management/city/search', 'CityController@search')->name('city.search');

Route::get('system-management/report', 'ReportController@index');
Route::post('system-management/report/search', 'ReportController@search')->name('report.search');
Route::post('system-management/report/excel', 'ReportController@exportExcel')->name('report.excel');
Route::post('system-management/report/pdf', 'ReportController@exportPDF')->name('report.pdf');

Route::get('avatars/{name}', 'EmployeeManagementController@load');

Route::get('staff-management/create', 'EmployeeManagementController@create');
Route::get('staff-management', 'EmployeeManagementController@index');
Route::post('staff-management', 'EmployeeManagementController@store');
Route::delete('staff-management/{id}','EmployeeManagementController@destroy');
Route::put('staff-management/{id}','EmployeeManagementController@update');
Route::get('staff-management/{id}/edit','EmployeeManagementController@edit');

Route::get('system-management/title/create', 'DivisionController@create');
Route::get('system-management/title', 'DivisionController@index');
Route::post('system-management/title', 'DivisionController@store');
Route::delete('system-management/title/{title}', 'DivisionController@destroy');
Route::put('system-management/title/{title}', 'DivisionController@update');
Route::get('system-management/title/{title}', 'DivisionController@show');
Route::get('system-management/title/{title}/edit', 'DivisionController@edit');








