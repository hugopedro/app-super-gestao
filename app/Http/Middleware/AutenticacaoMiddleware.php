<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      // verifica se o usuário está autenticado
      if(false) { // só testando, true libera rotas protegidas, tipo produtos e fornecedores
        return $next($request);
      } else {
        return Response('Acesso negado! Rota exige autenticação!');
      }
    }
}
