<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // A seguir será demonstrado 3 formas diferentes de fazer a inserção de dados no banco de dados.


        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 1';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        //o método create(atenção para o método fillable da classe no model )
        Fornecedor::create([
            'nome' => 'Fornecedor 2',
            'site' => 'fornecedor200.com.br',
            'uf' => 'RS',
            'email' => 'contato@fornecedor200.com.br'
        ]);

        //insert, nao é recomendavel, é só p/ conhecimento

        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 3',
            'site' => 'fornecedor300.com.br',
            'uf' => 'SC',
            'email' => 'contato@fornecedor300.com.br'
        ]);
    }
}
