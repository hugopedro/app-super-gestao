@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2"> <!-- lembrando que essas classes são do estilo_basico.css-->
      <p>Fornecedor - Adicionar</p>
    </div>
    <div class="menu">
      <li><a href="{{route('app.fornecedor.adicionar')}}">Novo</a></li>
      <li><a href="{{route('app.fornecedor')}}">Consulta</a></li>
    </div>
    <div class="informacao-pagina">
      <div style="width: 30%; margin-left: auto; margin-right:auto;">
        <form method="post" action="">
          <input type="text" name="nome" placeholder="Nome" class="bordapreta">
          <input type="text" name="site" placeholder="Site" class="bordapreta">
          <input type="text" name="uf" placeholder="UF" class="bordapreta">
          <input type="text" name="email" placeholder="E-mail" class="bordapreta">
          <button type="submit" class="borda-preta">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
@endsection 