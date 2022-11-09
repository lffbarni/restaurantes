@extends('layout.app')
@section('title','Restaurante - {{$restaurante->nome}}')
@section('content')
    <h1>Restaurante - {{$restaurante->nome}}</h1>
    <div class="card-todo">
        <div class='imagem'>
            <img class="img" src="{{url('imagens/'.$restaurante->imagem)}}">
        </div>
        <div class="conteudo">
            <h4>
                ID: {{$restaurante->id}}
                <br>
                Nome: {{$restaurante->nome}}
                <br>
                Categoria: {{$restaurante->categoria->nome}}
            </h4>
        </div>
    </div>
    <br>
    <br>
    {{Form::open(['route' => ['restaurantes.destroy',$restaurante->id],'method' => 'DELETE'])}}
    <a href="{{url('restaurantes/'.$restaurante->id.'/edit')}}" class="btn btn-success">Alterar</a>
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    <a href="{{url('restaurantes/')}}" class="btn btn-secondary">Voltar</a>
    {{Form::close()}}
@endsection