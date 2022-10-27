@extends('layout.app')
@section('title','Listagem de Restaurantes')
@section('content')
<h1>Listagem de categorias</h1>
<table class="table table-striped">
    <tr>
        <td>ID</td>
        <td>Nome</td>
    </tr>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{$categoria->id}}</td>
                <td>
                    <a href="{{url('categorias/'.$categoria->id)}}">{{$categoria->nome}}</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection