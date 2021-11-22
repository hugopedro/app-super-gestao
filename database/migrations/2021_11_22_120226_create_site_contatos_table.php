<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_contatos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 50); // no max 50 caracteres
            $table->string('telefone', 20); // no max 50 caracteres
            $table->string('email', 80); // no max 50 caracteres
            $table->integer('motivo_contato', 50); // no max 50 caracteres
            $table->text('mensagem'); // no max 50 caracteres
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_contatos');
    }
}
