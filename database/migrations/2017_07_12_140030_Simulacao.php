<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Simulacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('simulacoes', function (Blueprint $table){
            $table->increments('id');
            $table->bigInteger('clienteId');
            $table->integer('imovelId');
            $table->integer('nParcelas');
            $table->decimal('entrada');
            $table->decimal('subsidio');
            $table->float('juros');
            $table->string('estado');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('simulacoes');
    }
}
