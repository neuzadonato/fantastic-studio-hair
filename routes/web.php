<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaloesController;

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
})->name('home');

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

<<<<<<< HEAD
Route::get('/usuario', function () {
    return view('usuarios.create');
})->name('usuarios.create');

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');

Route::get('/usuarios/novo', [UsuariosController::class, 'create'])->name('usuarios.create');

Route::get('/usuarios/{usuario}', [UsuariosController::class, 'show'])->name('usuarios.show');

Route::get('/usuarios/{usuario}/editar', [UsuariosController::class, 'edit'])->name('usuarios.edit');

Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');

Route::put('/usuarios/{usuario}', [UsuariosController::class, 'update'])->name('usuarios.update');

Route::delete('/usuarios/{usuario}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');

=======
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
>>>>>>> 8a629566486a6992913a3294d6e5b89ff5c90bfe
