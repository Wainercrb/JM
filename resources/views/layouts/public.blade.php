<!DOCTYPE>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>@yield('title')</title>
      {!! Html::style(asset('components/bootstrap/css/bootstrap.min.css')) !!}
      {!! Html::style(asset('components/font-awesome/css/font-awesome.min.css')) !!}
      {!! Html::style(asset('css/animate.css')) !!}
      {!! Html::style(asset('css/public.css')) !!}
      {!! Html::style(asset('home-files/index.css')) !!}
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Pacifico" rel="stylesheet">

   </head>
   <body>
      <div class="container-fluid">
         <div class="row justify-content-center">
            @Include('layouts.header')
         </div>
      </div>
      <div class="main-content">
         @yield('content')
      </div>

      <footer class="footer">
         @Include('layouts.footer')
      </footer>
      {!! Html::script(asset('components/jquery/jquery.js')) !!}
      {!! Html::script(asset('components/bootstrap/js/bootstrap.min.js')) !!}
      {!! Html::script(asset('js/header.js')) !!}
   </body>
</html>
