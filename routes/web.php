<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ProdutosController;
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

const PREFIX = "tryon";

Route::group([
    "prefix" => PREFIX,
    "as" => PREFIX."."
],
function(){
    Route::get('admin',
    function(){
        return view(PREFIX.'/admin');
    })->name('admin');

    Route::get('home',
    function(){
        return view(PREFIX.'/home');
    }
    )->name('home');

    Route::get('produtos',
    function(){
        return view(PREFIX.'/produtos');
    })->name('produtos');
    Route::get('/produtos', [
        ProdutosController::class,
        'index'
    ]);
    Route::get('/produtos/{id}', [
        ProdutosController::class,
        'produto'
    ]);

    Route::get('contato',
    function(){
        return view(PREFIX.'/contato');
    })->name('contato');

    Route::get('politica',
    function(){
        return view(PREFIX.'/politica');
    })->name('politica');

    Route::resource('/cadastro', CadastroController::class);
});

//sintaxe -> Route::get('rota', [NomeClasse::class, 'metodo'])
//php artisan make:controller nomeController --resource
