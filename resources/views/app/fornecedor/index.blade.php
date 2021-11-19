<h3>Fornecedor</h3>

@php

@endphp

@isset($fornecedores)
  @for($i=0; isset($fornecedores[$i]); $i++)
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br />
    Status: {{ $fornecedores[$i]['status'] }}
    <br />
    CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
    <br />
    Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }})
    <hr>
  @endfor
@endisset