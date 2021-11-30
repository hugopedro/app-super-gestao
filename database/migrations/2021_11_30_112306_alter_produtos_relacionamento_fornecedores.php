<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProdutosRelacionamentoFornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // criando a coluna produtos que vai receber a fk de fornecedores
        Schema::table('produtos', function (Blueprint $table) {

            // insere um registro de fornecedor para estabelecer o relacionamento

            $fornecedor_id = DB::table('fornecedores')->insertGetId([
              'nome' => 'Fornecedor Padrão SG',
              'site' => 'fornecedorpadraosg.com.br',
              'uf' => 'SP',
              'email' => 'contato@fornecedorpadraosg.com.br'
          ]);

            $table->unsignedBigInteger('fornecedor_id')->default($fornecedor_id)->after('id'); // cria após a coluna id, só pra facilitar a leitura no workbench
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores'); // a referencia é o id da tabela fornecedores
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('produtos', function(Blueprint $table) {
        $table->dropForeign('produtos_fornecedor_id_foreign');
        $table->dropColumn('fornecedor_id');
      });
    }
}
