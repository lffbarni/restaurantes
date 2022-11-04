@extends('layout.app')
@section('title','Listagem de Restaurantes')
@section('content')
<h1>Listagem de Restaurantes</h1>
<div class="row">
    <div class="col-sm-3">
        <a class="btn btn-success" href="{{url('restaurantes/create')}}">Criar</a>
    </div>
    <br>
    <br>
</div>
<table class="table table-striped tabela-index-categoria">
    <tr class="tr-index-categoria">
        <td class="td-index-categoria">ID</td>
        <td class="td-index-categoria">Nome</td>
        <td class="td-index-categoria">Categoria</td>
    </tr>
    @foreach ($restaurantes as $restaurante)
        <tr class="tr-index-categoria">
            <td class="td-index-categoria">{{$restaurante->id}}</td>
            <td class="td-index-categoria">
                <a href="{{url('restaurantes/'.$restaurante->id)}}">{{$restaurante->nome}}</a>
            </td>
            <td class="td-index-categoria">{{$restaurante->categoria->nome}}</td>
        </tr>
    @endforeach
</table>
@endsection