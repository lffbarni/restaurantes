@extends('layout.app')
@section('title','Restaurante - {{$restaurante->nome}}')
@section('content')
    <h1>Restaurante - {{$restaurante->nome}}</h1>
    <ul class="ul">
        <h4>
            <li>ID: {{$restaurante->id}}</li>
            <li>Nome: {{$restaurante->nome}}</li>
            <li>Categoria: {{$restaurante->categoria->nome}}</li>
        </h4>
        <div class='imagem'>
            <img src="{{url('imagens/'.$restaurante->imagem)}}">
        </div>
        <br>
        <br>
    </ul>
    {{Form::open(['route' => ['restaurantes.destroy',$restaurante->id],'method' => 'DELETE'])}}
    <a href="{{url('restaurantes/'.$restaurante->id.'/edit')}}" class="btn btn-success">Alterar</a>
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    <a href="{{url('restaurantes/')}}" class="btn btn-secondary">Voltar</a>
    {{Form::close()}}
@endsection