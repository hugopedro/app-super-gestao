<h3>Fornecedor</h3>

@php

/*

if(empty($variavel)) {} retornar true se a variavel estiver vazia

Nessas situações o PHP entende que a variavel contem um valor vazio:

- ''
- 0
- 0.0
- '0'
- null
- false
- array()
- $var  (declarar variavel sem atribuir valor)

Ou seja, o empty retorna true nessas situações

00 não é vazio

*/
@endphp

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br />
Status: {{ $fornecedores[0]['status'] }}
<br />
@isset($fornecedores[0]['cnpj'])
  CNPJ: {{ $fornecedores[0]['cnpj'] }}
  @empty($fornecedores[0]['cnpj'])
    - Vazio
  @endempty
@endisset