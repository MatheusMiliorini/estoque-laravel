@extends('layout/principal')

@section('conteudo')   
<h1 class="meio">Listagem de produtos</h1>

@if (session('adicionou') == true)
    <div class="alert alert-success">
        <h4 class="meio">Adicionado produto {{session('produto')}} com sucesso!</h4>
    </div>
@endif
<table class="table table-bordered table-stripped">
    <thead class="thead-dark">
        <th>Nome</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($produtos as $p)
            <tr>
                <td>{{$p->nome}}</td>
                <td>R$ {{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td>@if ($p->quantidade == 0) Fora de estoque @else {{$p->quantidade}} @endif</td>
                <td class="meio">
                    <a href="/produtos/mostra/{{$p->id}}">
                        <i class="fas fa-search"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop