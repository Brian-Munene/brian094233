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
/*Route::get('/students', function()
{
    return view('BrianMunene.students');
});
Route::resource('/students', 'StudentsController');
//Route:: resource('/fees','FeesController');
*/

Route::get('/', 'BrianController@home');
Route::get('/students', 'BrianController@students');
Route:: get('/fees', 'BrianController@fees');

Route::get('/studentresult','StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::post('/students/save', 'StudentsController@store');

Route::get('/fees/create', 'FeesController@create');
Route::post('/fees/save', 'FeesController@store');
Route ::get('/feesresult', 'FeesController@index');
Route::post('/searchresult', 'FeesController@show');
