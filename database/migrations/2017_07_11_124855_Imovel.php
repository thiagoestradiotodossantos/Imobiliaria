<?php
//Arquivo gerado por: php artisan make:migration Imovel
//Digitadas as linhas de Schema, a table a foi cridada pelo comando: php artisan migrate:refresh OU php artisan migrate
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Imovel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table){
            $table->increments('id');
            $table->integer('unidade');
            $table->unique('unidade');
            $table->string('nome',50);
            $table->decimal('preco');
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
        Schema::drop('imoveis');
    }
}