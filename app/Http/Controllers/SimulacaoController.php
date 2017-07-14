<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Imovel;
use App\Simulacao;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SimulacaoController extends Controller
{
    private $simul;

    public function __construct(Cliente $simul)
    {
        $this->simul = $simul;
    }

    public  function cadastra(Request $request)
    {
        $novaSimulacao = new Simulacao;
        $novaSimulacao->clienteId = $request->clienteid;
        $novaSimulacao->imovelId = $request->imovelid;
        $novaSimulacao->nParcelas = $request->nparcelas;

        $novaSimulacao->save();//
//        dd($novaSimulacao->nParcelas);
//        dd($request->clienteid);
//
        $this->simula($novaSimulacao);//
//
//        dd($oi);
//
        return view('Simular');
    }

    public function simula(Simulacao $simulacao)
    {
        //.............Identificando Cliente e Imóvel:
        $clientes = Cliente::all();//
//
//        dd($clientes);
//
        $cliente = $clientes->where('cpf', $simulacao->clienteId)->first();//
//
//        dd($cliente);
//
        $imoveis = Imovel::all();
        $imovel = $imoveis->where('unidade', $simulacao->imovelId)->first();//
//        dd($imovel);
//
//        return $cliente;
//
        //..........Chamando metodos do modelo
        $simulacao->simula($cliente, $imovel);//
//
//        dd($simulacao);
//
        //TODO if de verificação
    }

    public function lista()
    {
        $simulacoes = Simulacao::all();//
//
//        dd($simulacoes->first()->cliente()->first()->cpf);
//        dd($simulacoes);
//
        return view('ListaSimulacao')->with('simulacoes', $simulacoes);
    }

//    public function atualiza(Simulacao $simulacao, $estado)
//    {
//        $simulacao->estado = $estado;
//        $this->save();
//    }

    public function age(Request $request)
    {

//        dd($request); // $request->has('acao') => id da simulação;
//
//
//
        if($request->has('aceitar'))
        {
//
//            dd($request->all());
//            dd($request->get('aceitar')[0]);
//
            $simulacoes = Simulacao::all();
            $simulacao = $simulacoes->where('id', $request->get('aceitar')[0] );//
//            dd($request->get('aceitar')[0]);
//            dd($simulacao[0]);
//            dd($simulacao->first());
            $simulacao->first()->estado = "ACEITO";//
//            //dd($simulacao->estado);
//            $estado = "ACEITO";
//            $this->atualiza($simulacao[0], $estado);
            $simulacao->first()->save();//
//
//            dd($simulacao[0]);
//
        }

        if($request->has('negar'))
        {
//            dd($request->get('negar')[0]);
//
//
//
            $simulacoes = Simulacao::all();
            $simulacao = $simulacoes->where('id', $request->get('negar')[0] );
            $simulacao->first()->estado = "NEGADO";
            $simulacao->first()->save();//
//
//            dd($request->all());
//
        }

        return $this->lista();
    }
}
