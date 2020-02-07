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

Route::get('/', 'TasksController@index');

Route::resource('tasks','TasksController');


/*
//CRUD
//タスクの個別詳細ページ表示
Route::get('tasks/{id}', 'TasksController@show');

//タスクの新規登録を処理
Route::post('tasks', 'TasksController@store');

//タスクの更新処理
Route::put('tasks/{id}', 'TasksController@update');

//タスクを削除
Route::delete('tasks/{id}', 'TasksController@destroy');


//index:showの補助ページ
Route::get('tasks','TasksController@index')->name('tasks.index');

//create:新規作成用のフォームページ
Route::get('tasks/create','TasksController@create')->name('tasks.create');

//edit:更新用のフォームページ
Route::get('tasks/{id}/edit','TasksController@edit')->name('tasks.edit');
*/