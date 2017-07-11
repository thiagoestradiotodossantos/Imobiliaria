<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Imovel;
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

        //dd($request->all());
        //dd($request->delCliente);
        //dd($request->has('delCliente'));
        //if($request->delCliente == 'Excluir')

        if($request->has('delCliente'))
        {
            $cadastro = Cliente::all();
            $id = $request->delCliente;
            $voltar = 1;
        }
        if($request->has('delImovel'))
        {
            $cadastro = Imovel::all();
            $id = $request->delImovel;
            $voltar = 2;
        }

        $cadastro = $cadastro->where('id', $id)->first();
        $cadastro->delete();
        return view('CadastroApagado')->with('voltar', $voltar);

    }
}
