@extends('layout/principal')

@section('conteudo')
<h1 class="meio">Detalhes do produto "{{$p->nome}}"</h1>

<ul class="list-group">
    <li class="list-group-item active">{{$p->nome}}</li>
    <li class="list-group-item">Valor: {{$p->valor}}</li>
    <li class="list-group-item">Descrição: {{$p->descricao}}</li>
    <li class="list-group-item">Quantidade: @if ($p->quantidade == 0) Fora de estoque @else {{$p->quantidade}} @endif</li>
</ul>
@stop