<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
          0 => [
            'nome' => 'Fornecedor 1',
            'status' => 'N', 
            'cnpj' => '0',
            'ddd' => '11', //SP
            'telefone' => '0000-0000'
          ],
          1 => [
            'nome' => 'Fornecedor 2',
            'status' => 'S',
            'cnpj' => null,
            'ddd' => '85', // Fortaleza
            'telefone' => '0000-0000'
          ],
          2 => [
            'nome' => 'Fornecedor 3',
            'status' => 'S',
            'cnpj' => null,
            'ddd' => '32', // Juiz de fora
            'telefone' => '0000-0000'
          ],
        ];

        //só pra mostrar o array vazio - mostrando que o forelse funciona

        $fornecedores = [];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
