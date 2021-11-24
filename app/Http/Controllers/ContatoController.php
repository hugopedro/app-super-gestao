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
      ],
      [
        'nome.required' => 'O campo nome é obrigatório',
        'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
        'nome.max' => 'O campo nome deve ter no máximo 100 caracteres',
        'nome.unique' => 'O nome informado já existe',
        'telefone.required' => 'O campo telefone é obrigatório',
        'telefone.min' => 'O campo telefone deve ter no mínimo 3 caracteres',
        'telefone.max' => 'O campo telefone deve ter no máximo 100 caracteres',
        'email.required' => 'O campo email é obrigatório',
        'email.email' => 'O campo email deve ser um email válido',
        'motivo_contatos_id.required' => 'O campo motivo de contato é obrigatório',
        'mensagem.required' => 'O campo mensagem é obrigatório',
        'mensagem.min' => 'O campo mensagem deve ter no mínimo 3 caracteres',
        'mensagem.max' => 'O campo mensagem deve ter no máximo 1000 caracteres'
      ]
    );
      $request->validate($regras, $feedback);

      SiteContato::create($request->all());
      return redirect()->route('site.index');
    }
}
