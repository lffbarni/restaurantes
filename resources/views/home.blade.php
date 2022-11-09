@extends('layout.app')
@section('title','Sistema Restaurante')
@section('content')
<h1>Menu</h1>
<ul>
    <li><a href="{{url('restaurantes/')}}">Restaurantes</a></li>
    <li><a href="{{url('categorias/')}}">Categorias</a></li>
</ul>
@endsection