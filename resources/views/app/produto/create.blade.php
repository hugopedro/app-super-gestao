@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2"> <!-- lembrando que essas classes são do estilo_basico.css-->
      @if(isset($produto->id))
        <h1>Editar Produto</h1>
      @else
      <p>Adicionar Produto</p>
      @endif
    </div>
    <div class="menu">
      <li><a href="{{ route('produto.index')}}">Voltar</li>
      <li>Consulta</a></li>
    </div>
    <div class="informacao-pagina">
      <div style="width: 30%; margin-left: auto; margin-right: auto;">
          @if(isset($produto->id))
          <form method="post" action="{{ route('produto.update', ['produto' => $produto->id])}}">
            @csrf
            @method('PUT')
          @else
          <form method="post" action="{{ route('produto.store')}}">
          @csrf
          @endif
              <input type="text" name="nome" value="{{ $produto->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
              {{ $errors->has('nome') ? $errors->first('nome') : '' }}

              <input type="text" name="descricao" value="{{ $produto->descricao ?? old('descricao') }}" placeholder="Descricao" class="borda-preta">
              {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

              <input type="text" name="peso" value="{{ $produto->peso ?? old('peso') }}" placeholder="Peso" class="borda-preta">
              {{ $errors->has('peso') ? $errors->first('peso') : '' }}

              <select name="unidade_id">
                <option>Selecione a Unidade de Medida</option>
                @foreach ($unidades as $unidade)
                  <option value="{{$unidade->id}}" {{ $produto->unidade_id ?? old('unidade_id') === $unidade->id ? 'selected' : '' }}>{{$unidade->descricao}}</option>
                @endforeach
              </select>
              {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}
              <button type="submit" class="borda-preta">Cadastrar</button>
          </form>
      </div>
  </div>
  </div>
@endsection