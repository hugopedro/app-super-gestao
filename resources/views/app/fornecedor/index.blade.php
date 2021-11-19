<h3>Fornecedor</h3>

{{--Fica o comentario que será descartado pelo interpretador do blade --}}

{{ 'Texto de teste '}}
<?= 'Texto de teste' ?>

@php
  // Para comentarios de uma linha
  /* multiplas linhas */

  /* {{ 'Texto de teste '}} equivale a <?= 'Texto de teste' ?> que equivale a 
  echo 'Texto de teste' dentro de um bloco de php */

  echo 'Texto de teste';
@endphp
