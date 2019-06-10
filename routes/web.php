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
    return view('welcome');
});

Auth::routes();
//Rota inicial, verifica para qual home enviar quem esta logando no sistema
Route::get('/home', function() {
    if (Auth::user()->admin == 1) {
      return view('home_admin');

    } else {
      
      return view('home');
    }
  });

/*
criado pelo laravel (DELETAR) 
Route::get('/home', 'HomeController@index')->name('home');
 */