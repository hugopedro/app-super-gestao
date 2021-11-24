<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContatosAddFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Criação da coluna
      Schema::table('site_contatos', function (Blueprint $table) {
        $table->unsignedBigInteger('motivo_contatos_id'); // lembrando que id é unsignedBigInteger  
      });

      // atribuindo motivo_contato para a nova coluna motivo_contatos_id
      DB::statement('update site_contatos set motivo_contatos_id = motivo_contato'); //permite executar uma query SQL no banco de dados

      // criacao da fk e remover a coluna obsoleta motivo_contato
      Schema::table('site_contatos', function (Blueprint $table) {
        $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
        $table->dropColumn('motivo_contato');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      // criar a coluna motivo_contato e removendo a FK
      Schema::table('site_contatos', function (Blueprint $table) {
        $table->integer('motivo_contato');
        $table->dropForeign('site_contatos_motivo_contatos_id_foreign'); // <tabela>_<coluna>_foreign

      //atribuir motivo_contatos_id para a coluna motivo_contato
      DB::statement('update site_contatos set motivo_contato = motivo_contatos_id'); // invertendo a operacao do up..

      // removendo a coluna motivo_contatos_id
      Schema::table('site_contatos', function (Blueprint $table) {
        $table->dropColumn('motivo_contatos_id');
      });
      });
    }
}
