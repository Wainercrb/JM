<!DOCTYPE>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    {{-- bootstrap css --}}
    <link href="{{asset('components/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"> @yield('files-css')
</head>

<body>
    
    <div class="container">
        <div class="row justify-content-center">
            @Include('layouts.header')
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            @yield('content')
        </div>
    </div>
    {{-- /content --}} {{-- plugins --}}
    <script src="{{asset('components/jquery/jquery.js')}}"></script>
    {{-- /plugins --}} {{-- boostrap js --}}
    <script src="{{asset('components/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/js.js')}}"></script>
    @yield('files-js');
    {{--<script src="components/home/index.js" type="text/javascript"></script> --}} {{-- /boostrap js --}} {{-- custom js --}} @yield('files-js') {{-- /custom js --}}
</body>

</html>