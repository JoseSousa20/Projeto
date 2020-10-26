@extends('layout')
@section('titulo')
Formulario
@endsection
@section('header')
@endsection
@section('conteudo')
<br>
     <h2>Formulario</h2>    

     <form method="post" action="{{route('enviado')}}">
     @csrf
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="form-group">
  <label for="jornal">Jornal Perferido</label>
  <select name="jornal">
           <option value="abola">A Bola</option>
           <option value="record">Record</option>
           <option value="ojogo">O jogo</option>
           <option value="maisfutebol">Maisfutebol</option>
        </select>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection
