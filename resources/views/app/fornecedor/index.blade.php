<h3>Fornecedor</h3>

@php

@endphp

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br />
Status: {{ $fornecedores[0]['status'] }}
<br />
CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido' }}
<!--
     $variavel testada não estiver definida (isset)
     ou
      $variavel testada possuir valor null
    ... o valor default é usada no lugar da variavel em questão.


-->