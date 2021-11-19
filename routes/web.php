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

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('site.login');

Route::prefix('/app')->group(function() {
Route::get('/clientes', function() {return 'clientes';})->name('app.clientes');
Route::get('/fornecedores', function() {return 'fornecedores';})->name('app.fornecedores');
Route::get('/produtos', function() {return 'produtos';})->name('app.produtos');
});

Route::get('/rota1', function() {echo 'rota 1';})->name('site.rota1');
/* Route::get('/rota2', function() {return 'produtos';})->name('site.rota2'); */

// primeira forma:

Route::get('/rota2', function() {
    return redirect()->route('site.rota1');
})->name('site.rota2');


// segunda forma: Route::redirect('/rota2', '/rota1');

Route::fallback(function() {
    return 'A rota não existe. <a href="'.route('site.index').'">clique aqui</a>';
});
