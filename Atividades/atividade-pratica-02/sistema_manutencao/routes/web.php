<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UserController;
use App\Models\Equipamento;
use App\Models\Registro;
use Illuminate\Support\Facades\Auth;

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
    return view('principal');
})->name('principal');

Route::get('/exibirequipamentos', function () {
    $equipamentos = Equipamento::get();
    $registros = Registro::join('equipamentos', 'registros.equipamentos_id', '=', 'equipamentos.id')
    ->join('users', 'registros.user_id', '=', 'users.id')
    ->select('users.name', 'equipamentos.nome','registros.*')
    ->get();
    return view('relatorios.index', ['dados' => $equipamentos, 'registros' => $registros]);
})->name('equipamentos');


Auth::routes();

Route::resource('/equipamentos', EquipamentoController::class);
Route::resource('/registros', RegistroController::class);
Route::resource('/users', UserController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
