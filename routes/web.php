<?php


use App\Task;
use Illuminate\Support\Facades\Route;



Route::get('/todolist','ToDoController@index')->name('todo.index');

Route::get('/todolist/create','ToDoController@create');

Route::get('/todolist/{todo}/edit','ToDoController@edit');

Route::post('/todolist/create','ToDoController@store');

Route::patch('/todolist/{todo}/update','ToDoController@update')->name('todo.update');

Route::put('/todolist/{todo}/complete','ToDoController@complete')->name('todo.complete');

Route::delete('/todolist/{todo}/incomplete','ToDoController@incomplete')->name('todo.incomplete');

Route::delete('/todolist/{todo}/delete','ToDoController@delete')->name('todo.delete');


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

Route::get('/hellooooo', function () {
    return view('welcome');
});

