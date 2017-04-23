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

Route::get('/', 'MainController@index');
Route::get('/admin', 'AdminController@index');
// programs
Route::get('/programs', 'ProgramsController@index');
Route::get('/programs/{program}', 'ProgramsController@show');
Route::get('/admin/programs', 'ProgramsController@admin_index');
Route::post('/admin/programs', 'ProgramsController@store');
Route::get('/admin/programs/create', 'ProgramsController@create');
Route::get('/admin/programs/{program}/edit', 'ProgramsController@edit');
Route::put('/admin/programs/{program}', 'ProgramsController@update');
Route::delete('/admin/programs/{program}', 'ProgramsController@destroy');
// courses
Route::get('/admin/courses', 'CoursesController@admin_index');