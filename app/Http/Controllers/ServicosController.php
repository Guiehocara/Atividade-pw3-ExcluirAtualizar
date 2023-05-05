<?php

namespace App\Http\Controllers;
use App\Models\Servicos;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function listarPedidos(){
    $Servicos = new Servicos();
    return view('indexServicos', ['servicos' => $Servicos->all()]);
    }

    public function cadastrarPedidos(Request $request){
    $Servicos = new Servicos();
    $Servicos->Nome = $request->Nome;
    $Servicos->Telefone = $request->Telefone;
    $Servicos->DataContato = $request->DataContato;
    $Servicos->Origem = $request->Origem;
    $Servicos->Observacao = $request->Observacao;
    $Servicos->save();
    return to_route('mostraServicos');
    }
    public function excluirPedidos(){
        
    }
    public function atualizarPedido(){

    }
}
