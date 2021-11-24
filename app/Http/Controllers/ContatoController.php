<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        //$contato = new SiteContato();
        //$contato->create($request->all()); // salva no banco
        //print_r($contato->getAttributes());
        $motivo_contatos = [
          '1' => 'Dúvida',
          '2' => 'Elogio',
          '3' => 'Reclamação',
        ];

        return view('site.contato', ['titulo' => 'Contato(teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request) {
      //realizar a validação dos dados do formulário recebidos no request

      //os parâmetros são associados de acordo com o name dos inputs (form.contato.blade.php)
      $this->validate($request, [
        'nome' => 'required|min:3|max:100',
        'telefone' => 'required|min:3|max:100',
        'email' => 'required|email',
        'mensagem' => 'required|min:3|max:1000'
      ]);
       // SiteContato::create($request->all());
    }
}
