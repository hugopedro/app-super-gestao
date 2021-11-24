<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogAcessoMiddleware
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
        //$request - manipular, o método $next só empurra a requisiçao pra frente (para o controlador, num método)
        //return $next($request);
        //response  - manipular
        //Só pra mostrar que tá passando pelo middleware
        return Response('Chegamos ao middleware e finalizamos no proprio middleware');
    }
}
