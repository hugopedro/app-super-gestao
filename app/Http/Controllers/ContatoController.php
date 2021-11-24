<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        //$contato = new SiteContato();
        //$contato->create($request->all()); // salva no banco
        //print_r($contato->getAttributes());
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato(teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request) {
      //realizar a validação dos dados do formulário recebidos no request

      //os parâmetros são associados de acordo com o name dos inputs (form.contato.blade.php)
      $this->validate($request, [
        'nome' => 'required|min:3|max:100|unique:site_contatos',
        'telefone' => 'required|min:3|max:100',
        'email' => 'required|email',
        'motivo_contatos_id' => 'required',
        'mensagem' => 'required|min:3|max:1000'
      ]);
       SiteContato::create($request->all());
       return redirect()->route('site.index');
    }
}
