<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
      <title>@yield('titulo')</title>
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    </head>
    <body>
       <h1 style="color: #fc0303">@yield('header')</h1>
       @yield('conteudo')
       <br>
       <br>
       <br>
       <div class="container">
       <div class="container-fluid">
       <h2>Opções de navegação</h2>
		<div class="row">
			<div class="col-md-2">
            <a href="{{route('index.index')}}"><i class="far fa-arrow-alt-circle-right"></i>Início</a>
			</div>
			<div class="col-md-2">
            <a href="{{route('noticias.index')}}"><i class="far fa-arrow-alt-circle-right"></i>Noticias</a>
			</div>
			<div class="col-md-2">
			<a href="{{route('empresa.index')}}"><i class="far fa-arrow-alt-circle-right"></i>Empresa</a>	
			</div>
            <div class="col-md-2">
			<a href="{{route('ondeEstamos.index')}}"><i class="far fa-arrow-alt-circle-right"></i>Onde Estamos</a>	
			</div>
            <div class="col-md-2">
            <a href="{{route('contactos.index')}}"><i class="far fa-arrow-alt-circle-right"></i>Contacto</a>
            </div>
            </div>
		</div>

		<hr>
	</div> <!-- /container -->
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
    </body>
</html>