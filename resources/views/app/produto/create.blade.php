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
          <form method="post" action="">
              @csrf
              <input type="text" name="nome" value="" placeholder="Nome" class="borda-preta">

              <input type="text" name="descricao" value="" placeholder="Descricao" class="borda-preta">

              <input type="text" name="peso" value="" placeholder="Peso" class="borda-preta">

              <select name="unidade_id">
                <option>Selecione a Unidade de Medida</option>
                @foreach ($unidades as $unidade)
                  <option value="{{$unidade->id}}">{{$unidade->descricao}}</option>
                @endforeach
              </select>

              <button type="submit" class="borda-preta">Cadastrar</button>
          </form>
      </div>
  </div>
  </div>
@endsection 