<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
      <title>@yield('titulo')</title>
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    </head>
    <body style="background-color: #ededed">
       @yield('header')
       <div class="container">
        <div class="container-fluid">
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
                <div class="col-md-2">
                <a href="{{route('form')}}"><i class="far fa-arrow-alt-circle-right"></i>Formulario</a>
                </div>
             </div>
         </div>

	</div> <!-- /container -->
        </div>
       <h1 style="color: #fc0303"></h1>
       @yield('conteudo')
      
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
    </body>
</html>