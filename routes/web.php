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

Route::get('tasks', 'App\Http\Controllers\TaskController@index');
Route::post('add', 'App\Http\Controllers\TaskController@add')->name('tasks.add');
Route::post('delete', 'App\Http\Controllers\TaskController@delete')->name('tasks.delete');
