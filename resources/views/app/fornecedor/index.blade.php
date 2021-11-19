<h3>Fornecedor</h3>

@php
  
@endphp

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
  <h3>Existem alguns Fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
  <h3>Existem muitos Fornecedores cadastrados</h3>
@else
  <h3>Não existem Fornecedores cadastrados</h3>
@endif