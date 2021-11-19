<h3>Fornecedor</h3>

@php

/* if(isset($variavel)) {} retornar true se a variavel estiver definida
repare que o isset nao se preocupa com o valor da variavel, só quer saber se existe ou n */
  
@endphp

Fornecedor: {{ $fornecedores[1]['nome'] }}
<br />
Status: {{ $fornecedores[1]['status'] }}
<br />
@isset($fornecedores[1]['cnpj'])
  CNPJ: {{ $fornecedores[1]['cnpj'] }}
@endisset