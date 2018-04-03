@extends('private.layouts.app')
@section('title')
    CONTRARREFERENCIAS
@endsection
@section('datails')
    contrarreferencias
@endsection
@section('action')
    MANTENIMIENTO CONTRARREFERENCIAS
@endsection
@section('styles')
   
@endsection
@section('javascript')
    
@endsection
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                    <input type="text" class="form-control" placeholder="Buscar"/>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    <button class="btn btn-new-row" type="button" onclick="getModalValues()">Buscar</button>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                    <button class="btn btn-new-row" type="button" onclick="getModalValues()">Nuevo</button>
                            </div>
                    </div>
                </div>
                <br>    
                
            </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">       
                        <div class="table-responsive">
                        <table class="table table-bordered" id="tableMedicion">
                            <thead class="thead-dark">
                                <tr>
                                  <th>Cédula</th>
                                  <th>Paciente</th>
                                  <th>Referidor</th>
                                  <th>fecha</th>
                                  <th class="text-center">Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($Reference as $item)
                                    <tr>
                                    <td>{{$item->identificationCard}}</td>                                
                                    <td>{{$item->patient}}</td>                                
                                    <td>{{$item->name}}{{$item->surnames}}</td>                                                                                             
                                    <td>{{$item->date}}</td>                                                                                                                                                                                       
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a type="button" href="{{ asset(''.'contra-referencia/editar/'.$item->id)}}" class="btn btn-primary">Editar</a>
                                            <a type="button" href="{{asset(''.'contra-referencia/ver/'.$item->id)}}" class="btn btn-primary">Ver</a>
                                            <a type="button" href="{{asset(''.'contra-referencia/eliminar/'.$item->id)}}" class="btn btn-primary">Eliminar</a>
                                        </div>
                                    </td>                                                                                          
                                    </tr>    
                                    @endForeach                        
                                </tbody>
                        </table>
                    </div>
                </div> 
            </div>
</div>
@endsection
