@extends('layout')
@section('titulo')
Formulario
@endsection
@section('header')
Formulario
@endsection
@section('conteudo')
    <form method="post" action="{{route('form')}}">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome">
    <label for="morada">Morada</label>
    <input type="text" name="morada">
    <label for="automovel">Automóvel</label>
    <select name="automovel">
           <option value="volvo">volvo</option>
           <option value="saab">Saab</option>
           <option value="mercedes">Mercedes</option>
           <option value="Audi">Audi</option>
        </select>
        <button type="submit">enviar</button>
        </form>
@endsection
