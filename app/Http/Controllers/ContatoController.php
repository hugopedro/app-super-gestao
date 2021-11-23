<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        $contato = new SiteContato();
        $contato->create($request->all()); // salva no banco
        //print_r($contato->getAttributes());
        return view('site.contato', ['titulo' => 'Contato(teste)']);
    }
}
