<?php

namespace App\Http\Controllers;
use App\Models\Servicos;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function listarPedidos(){
    $Servicos = new Servicos();
    $Servicos = $Servicos->all();
    return view('indexServicos', ['servicos'=> $Servicos->all()]);
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
    public function excluirPedidos(Request $request){
        Servicos::where('id', $request->id)->delete();
       return redirect('/consultar');
    }
    public function atualizarPedido(Request $request){
     
       $teste = Servicos::where('id',$request->Id)->update([
            'Nome'=> $request->Nome,
            'Telefone' => $request->Telefone,
            'DataContato' => $request->DataContato,
            'Origem' => $request->Origem,
            'Observacao' => $request->Observacao

        ]);
      
         return redirect('/consultar');
        

    }
}
