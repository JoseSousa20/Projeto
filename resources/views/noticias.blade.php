@extends('layout')
@section('titulo')
Jornais
@endsection
@section('header')
@endsection
@section('conteudo')
<br>
<h3>Jornais Desportivos</h3>
@foreach($sites as $site)
<h5><a href="{{$site}}">{{$site}}</h5>
@endforeach
@endsection
