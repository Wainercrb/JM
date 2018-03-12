@extends('private.layouts.app')
@section('title')
    NUEVO POST
@endsection
@section('datails')
    BITACORA
@endsection
@section('styles')
    <link href="components/inputFile/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="components/inputFile/themes/explorer-fa/theme.css" media="all" rel="stylesheet" type="text/css"/>
@endsection
@section('javascript')
    <script src="components/inputFile/js/fileinput.js" type="text/javascript"></script>
    <script src="components/inputFile/js/locales/fr.js" type="text/javascript"></script>
    <script src="components/inputFile/js/locales/es.js" type="text/javascript"></script>
    <script src="components/inputFile/themes/explorer-fa/theme.js" type="text/javascript"></script>
    <script src="components/inputFile/themes/fa/theme.js" type="text/javascript"></script>
    <script src="js/new-post.js"></script>
@endsection
@section('content')
<div class="container-fluid">
        <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">       
                    <button class="btn btn-new-row" type="button" onclick="getModalValues()">Nuevo</button>
                        <div class="table-responsive">
                        <table class="table table-bordered" id="tableMedicion">
                            <thead class="thead-dark">
                                <tr>
                                  <th>Cédula</th>
                                  <th>Paciente</th>
                                  <th>Referidor</th>
                                  <th>Diagnóstico</th>
                                  <th class="text-center">Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                        @foreach($againsReference as $post)
                                    <tr>
                                    <td>{{$post->identificationCard}}</td>                                
                                    <td>{{$post->patientName}}</td>                                
                                    <td>{{$post->id_user}}</td>                                                                                             
                                    <td>{{$post->forecast}}</td>                                                                                             
                                    <td>
                                        <div class="btn-group">
                                            <a type="button" href="/{{$post->id}}" class="btn btn-primary">Editar</a>
                                            <a type="button" href="/{{$post->id}}" class="btn btn-primary">Ver</a>
                                            <a type="button" href="/{{$post->id}}" class="btn btn-primary">Eliminar</a>
                                        </div></td>                                
                                                                                              
                                    </tr>    
                                    @endForeach
                                    @foreach($imgAgainstReference as $img)
                               
                                    {{$src = 'storage/'.$img->src}}
                                    <img src="{{ asset('storage/'.$img->src)}}" alt="">
                             
                                    
                                    @endForeach                        
                                </tbody>
                        </table>
                    </div>
                </div> 
            </div>
</div>
@endsection
