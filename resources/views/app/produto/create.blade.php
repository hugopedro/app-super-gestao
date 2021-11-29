@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2"> <!-- lembrando que essas classes são do estilo_basico.css-->
      <p>Adicionar Produto</p>
    </div>
    <div class="menu">
      <li><a href="{{ route('produto.index')}}">Voltar</li>
      <li>Consulta</a></li>
    </div>
    <div class="informacao-pagina">
      <div style="width: 30%; margin-left: auto; margin-right: auto;">
          @component('app.produto._components.form_create_edit', ['unidades' => $unidades])     
          @endcomponent
      </div>
  </div>
  </div>
@endsection