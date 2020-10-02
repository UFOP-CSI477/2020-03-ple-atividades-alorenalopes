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

use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\PessoasController;

Route::get('/', function () {
    return view('principal');
})->name('principal');

/* Route::get('/estados', function(){
    $estados = Estado::all();
    return view('listaEstado', ['dados' => $estados]);
});

Route::get('/estados/{id}', function($id){
    $estado = Estado::findorFail($id);
    return view('listaEstado', ['dados' => $estado]);
});

Route::get('/produtos', function(){
    $produtos = Produto::all();
    return view('listaProduto', ['dados' => $produtos]);
});

Route::get('/produtos/{id}', function($id){
    $produto = Produto::find($id);
    return view('listaProduto', ['dados' => $produto]);
});
 */
Route::resource('/estados', EstadoController::class);
Route::resource('/produtos', ProdutoController::class);
Route::resource('/cidades', CidadeController::class);
Route::resource('/compras', ComprasController::class);
Route::resource('/pessoas', PessoasController::class);