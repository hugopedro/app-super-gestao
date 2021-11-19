<h3>Fornecedor</h3>

@php

/* if(condicao) {} executa se a condicao for verdadeira 
já o unless executa se o retorno for falso */
  
@endphp

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br />
Status: {{ $fornecedores[0]['status'] }}
<br />
@if(!($fornecedores[0]['status'] == 'S'))
  Fornecedor Inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- executa se o retorno da condicao for false -->
  Fornecedor Inativo
@endunless
<br>

{{-- Ou seja, @endunless é igual ao if com !, é preferível usar o @unless--}}