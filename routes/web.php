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

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index')->middleware('log.acesso');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'salvar'])->name('site.contato');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('site.login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'autenticar'])->name('site.login');

Route::middleware('autenticacao:padrao,visitante,p3,p4')->prefix('/app')->group(function() {

  Route::get('/clientes', function() {return 'clientes';})->name('app.clientes');  
  Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'index'])
      ->name('app.fornecedor');
  Route::get('/produtos', function() {return 'produtos';})->name('app.produtos');
      

});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

Route::fallback(function() {
    return 'A rota não existe. <a href="'.route('site.index').'">clique aqui</a>';
});
