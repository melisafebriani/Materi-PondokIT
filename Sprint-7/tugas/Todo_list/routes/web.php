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
    return redirect()->route('login');
});

//todo

 Route::group(['middleware' => ["auth"]],  function (){
    
  });

  Route::get('/home', 'HomeController@index')->name('index');

  Route::get('/todo/index', 'TodosController@index');

  Route::get('/todo/create', 'TodosController@create'); 

  Route::post('/todo', 'TodosController@store'); 

  Route::delete('/todo/{todo}', 'TodosController@destroy'); 

  Route::get('/todo/{todo}/edit', 'TodosController@edit'); 

  Route::put('/todo/{todo}', 'TodosController@update');

  Route::resource('Todo', "TodoController");

  Auth::routes();






