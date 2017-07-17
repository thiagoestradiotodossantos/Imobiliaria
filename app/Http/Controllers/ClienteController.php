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

    public function validaCpf($cpf = null)
    {

        // Verifica se um número foi informado
        if (empty($cpf)) {
            return false;
        }

        // Elimina possivel mascara
        $cpf = preg_replace('[^0-9]', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        // Verifica se o numero de digitos informados é igual a 11
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se nenhuma das sequências invalidas abaixo
        // foi digitada. Caso afirmativo, retorna falso
        else if ($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999'
        ) {
            return false;
            // Calcula os digitos verificadores para verificar se o
            // CPF é válido
        } else {

            for ($t = 9; $t < 11; $t++) {

                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }

    // A FAZER: Mover operações de consulta do banco de dados para o model ();
    public function cadastro(Request $request)
    {
//        dd($request->cpf);
        if ($this->validaCpf($request->cpf)) {
            $novoCliente = new Cliente;
            $novoCliente->cpf = $request->cpf;
            $novoCliente->nome = $request->nome;
            $novoCliente->idade = $request->idade;
            $novoCliente->renda = $request->renda;

            $novoCliente->save();
//        return redirect($novoCliente)->route('listaCliente');
            return view('CadastrarCliente');
        }
        else
            return back()->withErrors(array('aviso'=>'CPF inválido.'));
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

//    public function exclui($id)       //FUNCIONAL
//    {
////        return view('teste', ['cpf'=>$cpf]);
//        $clientes = Cliente::all();
//        $cliente = $clientes->where('id',$id)->first();
////        $nome = $cliente->nome;
////        return view('teste', ['nome'=>$cliente->nome]);
//        $cliente->delete();
//        return view('CadastroApagado');
//
//    }
}