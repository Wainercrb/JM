@extends('private.layouts.app')
@section('title')
    NUEVO POST
@endsection
@section('datails')
    BITACORA
@endsection
@section('styles')
    {{--  <link href="components/inputFile/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="components/inputFile/themes/explorer-fa/theme.css" media="all" rel="stylesheet" type="text/css"/>  --}}
@endsection
@section('javascript')
    {{--  <script src="components/inputFile/js/fileinput.js" type="text/javascript"></script>
    <script src="components/inputFile/js/locales/fr.js" type="text/javascript"></script>
    <script src="components/inputFile/js/locales/es.js" type="text/javascript"></script>
    <script src="components/inputFile/themes/explorer-fa/theme.js" type="text/javascript"></script>
    <script src="components/inputFile/themes/fa/theme.js" type="text/javascript"></script>  --}}
    <script src="{{asset('js/new-post.js')}}"></script>
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12">
              <h1 class="text-center">DR. Jose Mora</h1> 
              <h5 class="text-center">Contra Referencia</h5>   
        </div>
        <div class="col-12 col-ms-4 col-md-4 col-lg-4 col-xl-4">
             <span id="sp">Cédula: {{$againsReference[0]->identificationCard}}</span>
        </div>
        <div class="col-12 col-ms-4 col-md-5 col-lg-4 col-xl-4">
             <span id="sp">Paciente: {{$againsReference[0]->patient}}</span>
        </div>
        <div class="col-12 col-ms-4 col-md-4 col-lg-4 col-xl-4">
             <span id="sp">Referidor: {{$againsReference[0]->name}}{{$againsReference[0]->surnames}}</span>
        </div>
        <div class="col-12 col-ms-4 col-md-4 col-lg-4 col-xl-4">
             <span id="sp">Organo dental: {{$againsReference[0]->dentalOrgan}}</span>
        </div>
        <div class="col-12 col-ms-4 col-md-5 col-lg-4 col-xl-4">
             <span id="sp">Diagnostico pulpar: {{$againsReference[0]->pulparDiagnosis}}</span>
        </div>
        <div class="col-12 col-ms-4 col-md-4 col-lg-4 col-xl-4">
             <span id="sp">Diagnóstico peridiacal: {{$againsReference[0]->periapicalDiagnosis}}</span>
        </div>
        <div class="col-12 col-ms-4 col-md-4 col-lg-4 col-xl-4">
             <span id="sp">Pronóstico: {{$againsReference[0]->forecast}}</span>
        </div>
        <div class="col-12 col-ms-4 col-md-5 col-lg-4 col-xl-4">
             <span id="sp">Inicio tratamiento: {{$againsReference[0]->startTreatment}}</span>
        </div>
        <div class="col-12 col-ms-4 col-md-4 col-lg-4 col-xl-4">
             <span id="sp">Fin tratamiento: {{$againsReference[0]->endTreatment}}</span>
        </div>
        <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12 tratamientos">
                <div class="table-responsive">
                        <table class="table table-bordered" id="tableMedicion">
                            <thead class="thead-dark">
                                <tr>
                                  <th>Conducto</th>
                                  <th>Medición</th>
                                  <th>Referencia</th>
                                  <th>Lima</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($measurements as $item )
                                        <tr>
                                       <td>{{ $item->conduit }}</td>                             
                                       <td>{{ $item->measuring }}</td>                             
                                       <td>{{ $item->reference }}</td>                             
                                       <td>{{ $item->lima }}</td>                             
                                    </tr>                            
                                       @endForeach                             
                                </tbody>
                        </table>
                    </div>
        </div>
        <div class="col-12 col-ms-6 col-md-6 col-lg-6 col-xl-6">
                <span id="sp">Fin tratamiento: {{$againsReference[0]->recommendation}}</span>
           </div>
        <div class="col-12 col-ms-6 col-md-6 col-lg-6 col-xl-6">
                <span id="sp">Fin tratamiento: {{$againsReference[0]->provisionalMaterial}}</span>
           </div>
        <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12">
                <span id="sp">Fin tratamiento: {{$againsReference[0]->observations}}</span>
           </div>
        <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12">
            <h5>Multimedia</h5>    
            <div class="container-flui">
                <div class="row">
                    @foreach($imgAgainstReference as $img)
                    <div class="col-12 col-ms-2 col-md-2 col-lg-2 col-xl-2">
                        
                        <img src="{{ asset('storage/'.$img->src)}}" class="img-fluid" alt="Resonsive-image">

                    </div>
                    @endForeach
                </div>
            </div>
            
        </div>
    </div>
</div>  



{{--  <div class="container-fluid">
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
</div>  --}}

<style>
.label-show{
    border:none !important;
    border-radius: 0px; 


}
#sp{
border-bottom: solid 1px;
font-size: 110%;
margin-bottom:10em !important; 

}
.col-12{
    margin-bottom:1em !important; 
}
</style>
@endsection
