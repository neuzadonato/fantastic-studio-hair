<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaloesController;


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
    return view('home');
})->name('home');


Route::get('/faca-parte', function () {
    return view('saloes.create');
})->name('saloes.create');

Route::get('/saloes', [SaloesController::class, 'index'])->name('saloes.index');

// Rota para o formulário de criação de Saloes
Route::get('/saloes/novo', [SaloesController::class, 'create'])->name('saloes.create');

// Rota para o mostrar um gato específico
Route::get('/salao/{salao}', [SaloesController::class, 'show'])->name('saloes.show');

// Rota para o formulário de edição de saloes
Route::get('/saloes/{salao}/editar', [SaloesController::class, 'edit'])->name('saloes.edit');

// Rota que armazena um novo gato no banco de dados
Route::post('/saloes', [SaloesController::class, 'store'])->name('saloes.store');

// Rota que atualiza um gato específico no banco de dados
Route::put('/Saloes/{gato}', [SaloesController::class, 'update'])->name('saloes.update');

// Rota que remove um gato específico do banco de dados
Route::delete('/Saloes/{gato}', [SaloesController::class, 'destroy'])->name('saloes.destroy');

Route::get('/teste', function(){
    return view('teste');
});
