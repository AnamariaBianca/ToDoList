<?php


use App\Task;
use Illuminate\Support\Facades\Route;



Route::get('/todolist','ToDoController@index');

Route::post('/todo', function (Request $request) {
    //
});

Route::delete('/todo/{id}', function ($id) {
    //
});
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

