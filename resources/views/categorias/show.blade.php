@extends('layout.app')
@section('title','Categoria - {{$categoria->nome}}')
@section('content')
    <h1>Contato - {{$categoria->nome}}</h1>
    <ul>
        <li>ID: {{$categoria->id}}</li>
        <li>Nome: {{$categoria->nome}}</li>
    </ul>
    {{Form::open(['route' => ['categorias.destroy',$categoria->id],'method' => 'DELETE'])}}
    <a href="{{url('categorias/'.$categoria->id.'/edit')}}" class="btn btn-success">Alterar</a>
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    <a href="{{url('categorias/')}}" class="btn btn-secondary">Voltar</a>
    {{Form::close()}}
@endsection