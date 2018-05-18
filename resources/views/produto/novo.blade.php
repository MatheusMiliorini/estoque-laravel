@extends('layout/principal')

@section('conteudo')
<h1 class="meio">Adição de produto</h1>
<form action="/produtos/adiciona" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="number" name="valor" id="valor" class="form-control">
    </div>
    <div class="form-group">
        <label for="descricao">Descricao</label>
        <input type="text" name="descricao" id="descricao" class="form-control">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" name="quantidade" id="quantidade" class="form-control">
    </div>

    <div class="form-group">
        <input class="btn btn-primary totalwidth" type="submit" value="Cadastrar">
    </div>
</form>
@stop