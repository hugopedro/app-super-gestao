<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
      // echo "a soma de $p1 + $p2 é: ".($p1+$p2);

      //array associativo, manda o indice para a view
      return view('site.teste', ['p1' => $p1, 'p2' => $p2]); // X é o indice do array

      //compact, é o mais utilizado

      return view('site.teste', compact('p1', 'p2'));

      //with

      // return view('site.teste')->with('xyz' => $p1)->with( 'zzz' => $p2);

    }
}
