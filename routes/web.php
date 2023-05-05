<?php

use App\Models\Servicos;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
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

Route::get('/indexServicos', [ServicosController::class, 'listarPedidos'])->name("mostraServicos");

Route::post('SalvarServicos', [ServicosController::class, 'cadastrarPedidos']);