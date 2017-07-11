<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ClienteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    private $client;

    public function __construct(Cliente $client)
    {
        $this->client = $client;
    }

    // A FAZER: Mover operações de consulta do banco de dados para o model ();
    public function cadastro(Request $request)
    {
//        dd($request->cfp);
        $novoCliente = new Cliente;
        $novoCliente->cpf = $request->cpf;
        $novoCliente->nome = $request->nome;
        $novoCliente->idade = $request->idade;
        $novoCliente->renda = $request->renda;

        $novoCliente->save();

//        return redirect($novoCliente)->route('listaCliente');
        return view('CadastrarCliente');
    }

    public function lista()
    {
        $clientes = Cliente::all();
        return view('ListaCliente')->with('clientes', $clientes);
    }

//    public function exclui($cpf)
//    {
//
//        $clientes = Cliente::all();
//        $cliente = $clientes->where('cpf', $cpf)->first();
////        dd($cliente);
//        $cliente->delete();
////        return view('teste', ['nome'=>$cliente->nome]);//Ou tira o "->first()" e faz: $cliente[0]->nome
//        return 'o';
//    }

    public function exclui($id)
    {
//        return view('teste', ['cpf'=>$cpf]);
        $clientes = Cliente::all();
        $cliente = $clientes->where('id',$id)->first();
//        $nome = $cliente->nome;
//        return view('teste', ['nome'=>$cliente->nome]);
        $cliente->delete();
        return view('CadastroApagado');

    }
}