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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MyController@viewList');

Route::get('AddForm', 'MyController@callAddForm');

Route::post('Add', ['as'=>'Add', 'uses'=>'MyController@add']);

Route::post('Search', ['as'=>'Search', 'uses'=>'MyController@search']);

Route::get('UpdateForm/{id}', 'MyController@callUpdateForm');

Route::post('Update', ['as'=>'Update', 'uses'=>'MyController@update']);

Route::get('Delete/{id}', 'MyController@delete');


//demo resolve MyController
Route::get('resolve', function () {
    $control = resolve('control');
    echo $control;
});
