<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
      return view('site.login', ['titulo' => 'Login']);
    }

    public function autenticar(Request $request) {
      //regras de validação
      $regras = [
        'usuario' => 'email',
        'senha' => 'required'
      ];

      //as mensagens de feedback de validação

      $feedback = [
        'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
        'senha.required' => 'O campo senha é obrigatório'
      ];

      // se não passar pelo validate
      $request->validate($regras, $feedback);

      // recuperamos os parâmetros do formulário
      $email = $request->get('usuario');
      $password = $request->get('senha');

      echo "Usuário $email senha $password";
      echo "<br>";

      // iniciar o Model User
      $user = new User();

      $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

      if(isset($usuario->name)) { // see existe um atributo name com valor tal no objeto user
        echo "Usuário encontrado";
        echo "<br>";
      } else {
        echo "Usuário não encontrado";
        echo "<br>";
      }

      echo '<pre>';
      print_r($usuario);
      echo '</pre>';

      print_r($request->all());
    }
}
