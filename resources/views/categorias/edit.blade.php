@extends('layout.app')
@section('title','Alteração Categoria {{$categoria->nome}}')
@section('content')
    <h1>Alteração de Categoria {{$categoria->nome}}</h1>
    <br/>
    {{Form::open(['route' => ['categorias.update',$categoria->id], 'method' => 'PUT'])}}
        {{Form::label('nome', 'Nome')}}
        {{Form::text('nome',$categoria->nome,['class'=>'form-control','required','placeholder'=>'Nome da categoria'])}}
        <br/>
        {{Form::submit('Salvar',['class'=>'btn btn-success'])}}
        <a href="{{url('categorias/'.$categoria->id)}}" class="btn btn-secondary">Voltar</a>
    {{Form::close()}}
@endsection

