<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{asset('components/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
        @yield('styles')
        <title>JM | @yield('title')</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    @yield('content')
                </div>
            </div>
        </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('components/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('components/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('components/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/sb-admin.min.js')}}"></script>
    @yield('javascript')
</body>                
</html>

            