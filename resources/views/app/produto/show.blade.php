@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2"> <!-- lembrando que essas classes são do estilo_basico.css-->
      <p>Visualizar Produto</p>
    </div>
    <div class="menu">
      <li><a href="{{ route('produto.index')}}">Voltar</li>
      <li>Consulta</a></li>
    </div>
    <div class="informacao-pagina">
      <div style="width: 30%; margin-left: auto; margin-right: auto;">
          <form method="post" action="{{ route('produto.store')}}">
             <table border="1" style="text-align: left">
                <tr>
                  <td>ID:</td>
                  <td>{{$produto->id}}</td>
                </tr>
                <tr>
                  <td>Nome</td>
                  <td>{{$produto->nome}}</td>
                </tr>
                <tr>
                  <td>Descrição</td>
                  <td>{{$produto->descricao}}</td>
                </tr>
                <tr>
                  <td>Peso</td>
                  <td>{{$produto->peso}} kg</td>
                </tr>
                <tr>
                  <td>Unidade de medida</td>
                  <td>{{$produto->unidade_id}}</td>
                </tr>
             </table>
          </form>
      </div>
  </div>
  </div>
@endsection 