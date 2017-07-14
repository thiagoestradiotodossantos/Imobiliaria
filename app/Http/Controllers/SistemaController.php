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

class SistemaController extends Controller
{

//    public function exclui($id)       //FUNCIONAL
//    {
//        $clientes = Cliente::all();
//        $cliente = $clientes->where('id',$id)->first();
//        $cliente->delete();
//        return view('CadastroApagado');
//
//    }

    public function exclui(Request $request)
    {


//........Falha: comparação de string com NULL; Método inválido pra o POST;.......
//        if (delCliente != null) {
//            $cadastro = Cliente::all();
//
//        }
//
//        if ('delImovel' != null)
//        {
//            $cadastro = Imovel::all();
//
//        }
//        $cadastro = $cadastro->where('id', $id)->first();
//        $cadastro->delete();
//        return view('CadastroApagado');
//...................................................................................

//        dd($request->all());
//        dd($request->delCliente);
//        dd($request->has('delCliente'));
//        dd($request->get('delCliente'));
//        if($request->delCliente == 'Excluir')
//        dd($request->get('delSimulacao')[0]);
//        dd($request->get('delSimulacao'));
        if($request->has('delCliente'))
        {
            $cadastro = Cliente::all();
            $id = $request->get('delCliente');
            $voltar = 1;
        }
        if($request->has('delImovel'))
        {
            $cadastro = Imovel::all();
            $id = $request->get('delImovel');
            $voltar = 2;
        }
        if($request->has('delSimulacao'))
        {
            $cadastro = Simulacao::all();
            $id = $request->get('delSimulacao')[0];
            $voltar = 3;
        }

        $cadastro = $cadastro->where('id', $id);
//        dd($cadastro->first());
        $cadastro->first()->delete();
        return view('CadastroApagado')->with('voltar', $voltar);

    }
}
