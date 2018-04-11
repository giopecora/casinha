<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('produtos')) {
            Schema::create('produtos', function(Blueprint $table){
                $table->increments('idProduto');
                $table->string('codigoProduto',50)->unique();
                $table->string('descricao',200);
                $table->string('grupo',50);
                $table->mediumInteger('qtdeDisponivel')->unsigned();
                $table->mediumInteger('qtdeAlugada')->unsigned();
                $table->string('nomeImagem',200);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
