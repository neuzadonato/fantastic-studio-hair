<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvaliacoesController;

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
});
// Rotas para o CRUD de Avaliacoes

// Rota para a listagem de Avaliacoes
Route::get('/Avaliacoes', [AvaliacoesController::class, 'index'])->name('avaliacoes.index');

// Rota para o formulário de criação de Avaliacoes
Route::get('/Avaliacoes/novo', [AvaliacoesController::class, 'create'])->name('avaliacoes.create');

// Rota para o mostrar um avaliacao específico
Route::get('/Avaliacoes/{avaliacao}', [AvaliacoesController::class, 'show'])->name('avaliacoes.show');

// Rota para o formulário de edição de Avaliacoes
Route::get('/Avaliacoes/{avaliacao}/editar', [AvaliacoesController::class, 'edit'])->name('avaliacoes.edit');

// Rota que armazena um novo avaliacao no banco de dados
Route::post('/Avaliacoes', [AvaliacoesController::class, 'store'])->name('avaliacoes.store');

// Rota que atualiza um avaliacao específico no banco de dados
Route::put('/Avaliacoes/{avaliacao}', [AvaliacoesController::class, 'update'])->name('avaliacoes.update');

// Rota que remove um avaliacao específico do banco de dados
Route::delete('/Avaliacoes/{avaliacao}', [AvaliacoesController::class, 'destroy'])->name('avaliacoes.destroy');

Route::get('/faca-parte', function () {
    return view('saloes.create');
})->name('saloes.create');

