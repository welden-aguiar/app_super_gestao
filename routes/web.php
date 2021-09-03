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


use App\Http\Controllers\PrincipalController;
Route::get('/', [PrincipalController::class,'principal'])->name('site.index'); 

use App\Http\Controllers\SobreNosController;
Route::get('/sobre-nos', [SobreNosController::class,'sobreNos'])->name('site.sobrenos');

use App\Http\Controllers\ContatoController;
Route::get('/contato', [ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');

Route::get('app/login',function () {return 'Login';})->name('site.login');

//app
Route::prefix('/app')->group(function(){
    Route::get('/clientes',function () {return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores','\App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos',function () {return 'produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'App\Http\Controllers\TesteController@teste')->name('site.teste');

Route::fallback(function () {
    return 'A rota acessada não exite. <a href="'.route('site.index').'">Clique Aqui</a> para ira para página inicial. ';
});

