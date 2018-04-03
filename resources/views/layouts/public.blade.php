<!DOCTYPE>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    {{--  bootstrap css  --}}
    <link href="{{asset('components/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    {{--  /bootstrap css  --}}
    {{--  custom css  --}}
    {{--  <link href="css/apphome.css" rel="stylesheet" type="text/css">  --}}
    <link href="{{asset('css/headerFooter.css')}}" rel="stylesheet" type="text/css">
    @yield('files-css')
    {{--  /custom css  --}}
    {{--  google fonts  --}}
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
    {{--  /google fonts    --}}
  </head>
<body>
{{--  navegation  --}}
  <nav class="navbar navbar-toggleable-md fixed-top navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"  aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-reorder"></i>
          {{--  MENÚ  --}}
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-md-0">
              <li class="nav-item active">
                  <a class="nav-link" href="#">
                      INICO
                      <span class="sr-only">(current)</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">
                      POST
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">
                      PERFIL
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">
                      APP
                  </a>
              </li>
          </ul>
      </div>
  </nav>
  {{--  /navegation  --}}
  {{--  content  --}}
  <div class="main-content">
    @yield('content')
  </div> 
  {{--  /content  --}}
  {{--  footer  --}}
  <footer class="footer">
      <div class="footer-social">
          <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
          <a href="#" class="social-icons"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
      </div>
      <p class="footer-copyright">© 2017 Copyright</p>
  </footer>
  {{--  footer  --}}
  {{--  plugins  --}}
  <script src="{{asset('components/jquery/jquery.js')}}"></script>
  {{--  /plugins  --}}
  {{--  boostrap js  --}}
  <script src="{{asset('components/bootstrap/js/bootstrap.min.js')}}"></script>
  {{--  <script src="components/home/index.js" type="text/javascript"></script>  --}}
  {{--  /boostrap js  --}}
  {{--  custom js  --}}
  @yield('files-js')
  {{--  /custom js  --}}
  </body>
</html>


	
