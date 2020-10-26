@extends('layout')
@section('titulo')
Formulário submetido
@endsection
@section('header')
@endsection
@section('conteudo')
<br>
<h3>Formulário submetido</h3>
   <h5>Nome: </h5>{{$nome}}<br>
   <h5>Password: </h5>{{$password}}<br>
   <h5>Jornal Preferido: </h5S>{{$jornal}}<br>
@endsection