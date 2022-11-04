@extends('layout.app')
@section('title','Criar novo Restaurante')
@section('content')
<h1>Criar novo Restaurante</h1>
<br>
<br>
{{Form::open(['route' => 'restaurantes.store', 'method' => 'POST','enctype'=>'multipart/form-data'])}}
<div class="div-create-categoria">
    {{Form::label('nome', 'Nome')}}
    <br>    
    {{Form::text('nome','',['class'=>' form-create-categoria','required','placeholder'=>'Nome do Restaurante'])}}
    <br>
    <br>
    {{Form::label('categoria_id', 'Categoria')}}
    <br>
    {{Form::text('categoria_id','',['class'=>' form-create-categoria','required','placeholder'=>'Categoria do Restaurante', 'list' => 'listcategorias'])}}
    <datalist id='listcategorias'>
        @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
        @endforeach
    </datalist>
    <br>
    <br>
    {{Form::label('imagem', 'Imagem')}}
    <br>
    {{Form::file('imagem',['class'=>'form-control'])}}
    <br>
    <div>
    {{Form::submit('Salvar',['class'=>'btn btn-success'])}}
    <a href="{{url('categorias/')}}" class="btn btn-secondary">Voltar</a>
    </div>
{{Form::close()}}
</div>
@endsection