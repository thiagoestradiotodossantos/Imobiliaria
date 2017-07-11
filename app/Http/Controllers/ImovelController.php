<?php

namespace App\Http\Controllers;

use App\Imovel;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ImovelController extends Controller
{
    private $imvl;

    public function __construct(Imovel $imvl)
    {
        $this->imvl = $imvl;
    }

    public function cadastro(Request $request)
    {
        $novoImovel = new Imovel;
        $novoImovel->nome = $request->nome;
        $novoImovel->unidade = $request->unidade;
        $novoImovel->preco = $request->preco;

        $novoImovel->save();

        return view('CadastrarImovel');
    }
}