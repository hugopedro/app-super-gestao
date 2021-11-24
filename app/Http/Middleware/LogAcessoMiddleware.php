<?php

namespace App\Http\Middleware;

use Closure;
use \App\Models\LogAcesso;

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
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        LogAcesso::create(['log' => "IP $ip requisitou a rota $rota"]);
        return Response('Chegamos ao middleware e finalizamos no proprio middleware');
    }
}
