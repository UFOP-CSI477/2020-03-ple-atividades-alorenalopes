<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExameController;
use App\Http\Controllers\PastaController;
use App\Models\Exame;

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

Route::get('/listar/{nome}', function ($nome) {

    $exames = Exame::orderBy('data', 'desc')->get();
    return view('listar', ['dados' => $exames, 'tipo' => $nome]);
})->name('listar')->middleware('auth');

Route::get('/deletar/{exame}', function ($exame) {

    $exame->delete();
    return redirect()->route('pastas.index');
})->name('deletar');


Route::resource('/pastas', PastaController::class)->middleware('auth');
Route::resource('/exames', ExameController::class)->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
