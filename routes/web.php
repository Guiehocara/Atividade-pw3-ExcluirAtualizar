<?php

use App\Models\Servicos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicosController;


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

Route::get('/', [function () {
    return view('index');
}]);

Route::get('/consultar', [ServicosController::class, 'listarPedidos'])->name("mostraServicos");

Route::post('SalvarServicos', [ServicosController::class, 'cadastrarPedidos']);

Route::get('/atualizar', function(Request $request){
    
    return view('atualizar', ['servicos' => Servicos::where('id', $request->id)->first()]);
});
Route::post('/atualizar', [ServicosController::class, 'atualizarPedido']);

Route::get('/excluir', [ServicosController::class, 'excluirPedidos']);