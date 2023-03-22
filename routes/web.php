<?php

use App\Models\Servicos;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/indexServicos', function () {
    $Servicos = new Servicos();


    return view('indexServicos', ['servicos' => $Servicos->all()]);
})->name("mostraServicos");

Route::post('SalvarServicos', function (HttpRequest $request){
    //Servicos::insert("insert into servicos values($request->Nome, $request->Telefone, $request->Origem, $request->Observacao)");
    $Servicos = new Servicos();
    $Servicos->Nome = $request->Nome;
    $Servicos->Telefone = $request->Telefone;
    $Servicos->Origem = $request->Origem;
    $Servicos->Observacao = $request->Observacao;
    $Servicos->save();
    return to_route('mostraServicos');
});