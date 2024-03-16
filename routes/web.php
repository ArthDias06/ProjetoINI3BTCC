<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// rota que retorna uma ola
Route::get('/olamundo', function () {
    return "ola mundo";
});

Route::get('/faleconosco/{id?}', function ($id = null)
    { return "recebi o valor = $id"; }
);

Route::post('/contato', function () {
    dd($_POST);
});

Route::post('/contato', 
    ['uses'=>'App\Http\Controllers\contatoController@index']);

Route::get('/pagina/Pagina1', function(){
    return view('/pagina/Pagina1');
});

Route::get('/pagina/Pagina2', function(){
    return view('/pagina/Pagina2');
});

Route::get('/pagina/Pagina3', function(){
    return view('/pagina/Pagina3');
});