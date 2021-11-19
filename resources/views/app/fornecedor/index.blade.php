<h3>Fornecedor</h3>

@php

@endphp

@isset($fornecedores)
Fornecedor: {{ $fornecedores[0]['nome'] }}
<br />
Status: {{ $fornecedores[0]['status'] }}
<br />
CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido' }}
<br />
Telefone: ({{ $fornecedores[0]['ddd'] ?? '' }} {{ $fornecedores[0]['telefone'] ?? '' }})
@switch($fornecedores[0]['ddd'])
  @case('01')
        <br />
        São Paulo - SP
    @break
  @case('32')
        Juiz de Fora - MG
    @break
  @case('85')
        Fortaleza - CE
    @break
  @default
    Estado desconhecido
@endswitch
@endisset