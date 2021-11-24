<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;

class PrincipalController extends Controller
{
    public function principal()
    {
      $motivo_contatos = MotivoContato::all(); // Busca todos os registros da tabela motivo_contato e armazena na variável $motivo_contatos

      //... que será passada para a view principal.blade.php
      return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
    }
}
