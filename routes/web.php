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
Route::prefix('cardapio')->group(function () {
    Route::get('', function(){    
        return view('cardapio.home');
    });
    
    Route::resource('categorias', 'cardapio\api\CategoriaController');
    Route::resource('ingredientes', 'cardapio\api\IngredienteController');
});












Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/financeiro', function (){
    return view('financeiro.home');
});
