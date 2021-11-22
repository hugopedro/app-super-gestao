<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('produto_detalhes', function (Blueprint $table) {
        //colunas
        $table->id();
        $table->unsignedBigInteger('produto_id'); //produto_id porque é aquela tabela que está relacionada, é a chave!, e esta no singular por isso.
        $table->float('comprimento', 8, 2);
        $table->float('largura', 8, 2);
        $table->float('altura', 8, 2);
        $table->timestamps();

        //constraint
        $table->foreign('produto_id')->references('id')->on('produtos');
        $table->unique('produto_id'); // garante que não haja produtos repetidos, ou seja garante que o relacionamento é 1:1
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_detalhes');
    }
}
