@extends('private.layouts.app')
@section('title')
    ELIMINAR
@endsection
@section('datails')
    administrar/contrarreferencia/detalles
@endsection
@section('action')
    ELIMINAR CONTRARREFERENCIA
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
@endsection
@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ asset(''.'contra-referencia/confirmar-eliminar')}}">
        <div class="row">
                {{ csrf_field() }}
           <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12">
              <h1 class="text-center">DR. Jose Mora</h1>
              <h5 class="text-center">Contra Referencia</h5>
           </div>
           <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12">
              <hr>
              <input type="text" hidden name="id" value="{{$againsReference[0]->id}}">
           </div>
           <div class="col-12 col-ms-6 col-md-6 col-lg-6 col-xl-6">
              <span id="sp"><strong>Cédula: </strong>{{$againsReference[0]->identificationCard}}</span>
           </div>
           <div class="col-12 col-ms-6 col-md-6 col-lg-6 col-xl-6">
              <span id="sp"><strong>Paciente: </strong>{{$againsReference[0]->patient}}</span>
           </div>
           <div class="col-12 col-ms-6 col-md-6 col-lg-6 col-xl-6">
              <span id="sp"><strong>Referidor: </strong>{{$againsReference[0]->name}}{{$againsReference[0]->surnames}}</span>
           </div>
           <div class="col-12 col-ms-6 col-md-6 col-lg-6 col-xl-6">
              <span id="sp"><strong>Organo dental: </strong>{{$againsReference[0]->dentalOrgan}}</span>
           </div>
           <div class="col-12 col-ms-6 col-md-6 col-lg-6 col-xl-6">
              <span id="sp"><strong>Diagnostico pulpar: </strong>{{$againsReference[0]->pulparDiagnosis}}</span>
           </div>
           <div class="col-12 col-ms-6 col-md-6 col-lg-6 col-xl-6">
              <span id="sp"><strong>Diagnóstico peridiacal: </strong>{{$againsReference[0]->periapicalDiagnosis}}</span>
           </div>
           <div class="col-12 col-ms-6 col-md-6 col-lg-6 col-xl-6">
              <span id="sp"><strong>Pronóstico: </strong>{{$againsReference[0]->forecast}}</span>
           </div>
           <div class="col-12 col-ms-6 col-md-6 col-lg-6 col-xl-6">
              <span id="sp"><strong>Inicio tratamiento: </strong>{{$againsReference[0]->startTreatment}}</span>
           </div>
           <div class="col-12 col-ms-6 col-md-6 col-lg-6 col-xl-6">
              <span id="sp"><strong>Fin tratamiento: </strong>{{$againsReference[0]->endTreatment}}</span>
           </div>
           <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12">
              <hr>
           </div>
           <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12">
              <h5 class="text-center">Mediciónes</h5>
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
              <span id="sp"><strong>Recomendaciones: </strong>{{$againsReference[0]->recommendation}}</span>
           </div>
           <div class="col-12 col-ms-6 col-md-6 col-lg-6 col-xl-6">
              <span id="sp"><strong>Material provicional: </strong>{{$againsReference[0]->provisionalMaterial}}</span>
           </div>
           <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12">
              <span id="sp"><strong>Observaciones: </strong>{{$againsReference[0]->observations}}</span>
           </div>
           <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12">
              <hr>
           </div>
           <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12">
              <h5 class="text-center">Adjunto</h5>
           </div>
           <div class="col-12 col-ms-12 col-md-12 col-lg-12 col-xl-12">
              <div class="container-fluid">
                 <div class="row container-files justify-content-center">
                    @foreach($imgAgainstReference as $img)
                    <div class="col-12 col-ms-2 col-md-2 col-lg-2 col-xl-2 card container-image-database">
                       <img src="{{ asset('storage/'.$img->src)}}" class="img-fluid files-img" onclick="preview(this.src, 'Vista Previa')" alt="Resonsive-image">
                    </div>
                    @endForeach
                 </div>
              </div>
           </div>
           <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right"> 
                <button class="btn" type="submit" onsubmit="validateForm()">Eliminar</button> 
            </div>
        </div>
    </form>
</div>
     <div id="modal-preview" class="modal" role="dialog"  ondblclick="closeModal()">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">
              <div class="modal-header text-center">
                 <span class="close" onclick="closePreviewModal()" >&times;</span>
              </div>
              <div class="container justify-content-center">
                 <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 body-modal">
                    <div class="container container-modal-image text-center">
                       <img id="image-modal" src="" class="img-fluid" alt="Responsive image">
                    </div>
                 </div>
                 <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footer-modal justify-content-center">
                    <h5 id="name-modal-image" class="text-center"></h5>
                 </div>
              </div>
           </div>
        </div>
     </div>
<style>
.label-show{
     border:none !important;
     border-radius: 0px;
}
 #sp{
     font-size: 130%;
     margin-bottom:10em !important;
}
 .col-12{
     margin-bottom:1em !important;
}
 .container-files{
     border: dotted 2px;
     padding: 2em 0em 2em 0em;
}
/*style modal images*/
 .container-output {
     border: 2px dashed;
     height: 5%;
     padding: 5% 0% 5% 0%;
     margin-bottom: 2em;
}
 .container-modal-image {
     max-height: calc(110vh - 310px);
     overflow-y: auto;
}
 .container-image-database{
     padding: 0.5%;
     margin:0.5%;
     max-width: none !important;
     max-height: none !important;
     width: 100%;
     height: 100%;
}
 #modal-preview {
     background-color: rgb(0, 0, 0);
     width: 100%;
     height: auto%;
     max-width: 100%;
}
 .body-modal {
     margin: 0%;
     padding: 0%;
}
 .modal-header {
     border-bottom: none;
}
 .footer-modal {
     padding: 0% 0% 0% 0%;
}
 .close:hover, .close:focus {
     color: #bbb;
     text-decoration: none;
     cursor: pointer;
}
/*/
style modal images*/
/* Animation modal */
 .modal-footer, #name-modal-image, .modal-content {
     -webkit-animation-name: zoom;
     -webkit-animation-duration: 0.6s;
     animation-name: zoom;
     animation-duration: 0.6s;
}
 @-webkit-keyframes zoom {
     from {
         -webkit-transform: scale(0) 
    }
     to {
         -webkit-transform: scale(1) 
    }
}
 @keyframes zoom {
     from {
         transform: scale(0) 
    }
     to {
         transform: scale(1) 
    }
}
 .files-img{
     cursor: pointer;
}
/* Animation modal */

</style>
<script>
/*This function loads the image to the modal*/
function preview(value, title) {
    try {
        document.getElementById('image-modal')
            .setAttribute(
                'src', value
            );
        document.getElementById('name-modal-image').innerHTML = title;
        var modal = document.getElementById('modal-preview');
        modal.style.display = "block";

    } catch (error) {
        alert(error.message);
    }
};
/*This funtion close the modal*/
function closeModal() {
    try {
        $("#modal-preview").fadeOut();
        $("#modal-preview").fadeOut("slow");
        $("#modal-preview").fadeOut(7000);
    } catch (error) {
        alert(error.message);
    }

};
/*This funtion close the modal*/
function closePreviewModal() {
    try {
        $("#modal-preview").fadeOut();
        $("#modal-preview").fadeOut("slow");
        $("#modal-preview").fadeOut(7000);
    } catch (error) {
        error.message;
    }
}
</script>
@endsection
