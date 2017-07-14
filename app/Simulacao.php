<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Simulacao extends Model
{
    protected $table = "simulacoes";


    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'clienteId', 'cpf');
    }                                                   // Cria uma relação de duas tableas diferentes (a simulação
                                                        //a um cliente específico) por meio da comparação de colunas;
                                                        //Parâmetros: 'foreingKey' é a coluna local
                                                        //e 'ownerKey' é a coluna de outra tabela a serem comparadas.
                                                        // Se estes parâmetros não fossem passados, a comparação
                                                        //(e a relação) seria estabelecida pelas PrimarysKeys;

    public function imovel()
    {
        return $this->belongsTo('App\Imovel', 'imovelId', 'unidade');
    }


    public function simula(Cliente $cliente, Imovel $imovel)
    {

//        $nome = $cliente->nome;
        $idade = $cliente->idade;
        $renda = $cliente->renda;

        $preco = $imovel->preco;

        $nParcelas = $this->nParcelas;

        if( ($idade<18 || $idade>=65) || ($renda<500 || $renda>=3499.99) || ($preco>180000) )
        {
            $this->entrada = 0;
            $this->subsidio = 0;
            $this->juros = 0;
            $this->estado = "NEGADO";
            $this->save();
        }
        else
        {
            /*Encontando das constantes*/
            if($idade>=18 && $idade<=25)
                $perIdade = 0.03;
            if($idade>25 && $idade<=34)
                $perIdade = 0.025;
            if($idade>34 && $idade<=64)
                $perIdade = 0.02;

            if($renda>=500 && $renda<1500){
                $perRenda = 0.03;
                $this->juros = 0.02;
            }
            if($renda>=1500 && $renda<2500){
                $perRenda = 0.025;
                $this->juros = 0.015;
            }
            if($renda>=2500 && $renda<3500){
                $perRenda = 0.015;
                $this->juros = 0.01;
            }

            /*Efetuando os cálculos*/
            $this->entrada = $renda*5;
            $this->subsidio = ($perIdade + $perRenda)*$preco;
            $valorafinanciar = $preco - $this->subsidio - $this->entrada;
            $valorprestacao = ($valorafinanciar*(1+($this->juros)^($nParcelas/12)))/$nParcelas;

            /*Verificando estado do Financiamento*/
            if($valorprestacao>($renda/2))
                $this->estado = "INVIAVEL";
            else
                $this->estado = "SIMULACAO";

            $this->save();
        }
    }

//    public function atualiza(Simulacao $simulacao, $estado)
//    {
//        $simulacao->estado = $estado;
//        $this->save();
//    }
}
