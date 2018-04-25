{!!Form::token()!!}
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        @Include('messages.errors')
    </div>
    <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 form-group">
        {!!Form::label('identificationCard', 'Cédula:')!!} {!!Form::text('identificationCard', old('identificationCard'), ['class' => 'form-control' , 'readonly' => true, 'required' => true])!!}
    </div>
    <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 form-group">
        {!!Form::label('patient', 'Nombre del paciente:')!!} {!!Form::text('patient', old('patient'), ['class' => 'form-control', 'readonly' => true , 'required' => true])!!}
    </div>
    <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 form-group">
        {!!Form::label('name', 'Referidor:')!!} {!!Form::text('name', old('name'), ['class' => 'form-control', 'readonly' => true, 'required' => true])!!}
    </div>
    <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 form-group">
        {!!Form::label('dentalOrgan', 'Organo Dental:')!!} {!!Form::text('dentalOrgan', old('dentalOrgan'), ['class' => 'form-control', 'placeholder' => 'Ingrese el organo Dental', 'required' => true])!!}
    </div>
    <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 form-group">
        {!!Form::label('pulparDiagnosis', 'Diagnóstico Pulpa:')!!} {!!Form::text('pulparDiagnosis', old('pulparDiagnosis'), ['class' => 'form-control', 'placeholder' => 'Ingrese el Diagnóstico Pulpa' , 'required' => true])!!}
    </div>
    <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 form-group">
        {!!Form::label('periapicalDiagnosis', 'Diagnóstico Periapical:')!!} {!!Form::text('periapicalDiagnosis', old('periapicalDiagnosis'), ['class' => 'form-control', 'placeholder' => 'Ingrese el Diagnóstico Periapical' , 'required' => true])!!}
    </div>
    <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 form-group">
        {!!Form::label('forecast', 'Estado:')!!} {!!Form::select('forecast', array('Seleccione' => 'Seleccione', 'Bueno' => 'Bueno', 'Medio' => 'Medio', 'Malo' => 'Malo') , isset($againsReference)? $againsReference->forecast:'', ['class' => 'form-control'])!!}
    </div>
    <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 form-group">
        {!!Form::label('startTreatment', 'Inicio del Tratamiento:')!!} {!!Form::date('startTreatment', old('startTreatment'), ['class' => 'form-control', 'placeholder' => 'Ingrese el inicio del tratamiento' , 'required' => true])!!}
    </div>
    <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 form-group">
        {!!Form::label('endTreatment', 'Inicio del Tratamiento:')!!} {!!Form::date('endTreatment', old('endTreatment'), ['class' => 'form-control', 'placeholder' => 'Ingrese el fin del tratamiento' , 'required' => true])!!}
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 sub-title-section">
        <h2 class="text-center">Tratamientos realizados = {{isset($measurements) && count($measurements) > 0? count($measurements): '0'}}</h2>
    </div>
    @if(isset($measurements) && count($measurements) > 0)
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="againstReferenceTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>Conducto</th>
                            <th>Medición</th>
                            <th>Referencia</th>
                            <th>Lima</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($measurements as $item)
                        <tr style="background-color:#bbb;">
                            <td>{{$item->conduit}}</td>
                            <td>{{$item->measuring}}</td>
                            <td>{{$item->reference}}</td>
                            <td>{{$item->lima}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 sub-title-section">
        <h2 class="text-center">Observaciónes</h2>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group">
        {!!Form::label('recommendation', 'Recomendación:')!!} {!!Form::text('recommendation', old('recommendation'), ['class' => 'form-control', 'placeholder' => 'Ingrese la recommendation' , 'required' => true])!!}
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group">
        {!!Form::label('provisionalMaterial', 'Material provisional:')!!} {!!Form::text('provisionalMaterial', old('provisionalMaterial'), ['class' => 'form-control', 'placeholder' => 'Ingrese el material provisional' , 'required' => true])!!}
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 form-group">
        {!!Form::label('observations', 'Obsercaciones:')!!} {!!Form::textarea('observations', old('observations'), ['class' => 'form-control', 'placeholder' => 'Ingrese las observations' , 'required' => true, 'rows' => 5, 'cols' => 5])!!}
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 sub-title-section">
        <h2 class="text-center">Archivos = {{isset($imgAgainstReference) && count($imgAgainstReference) > 0? count($imgAgainstReference): '0'}}</h2>
    </div>
</div>
@if(isset($imgAgainstReference) && count($imgAgainstReference) > 0)
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 container-image-database">
    <h5 class="text-center">Imagenes gurdardas</h5>
    <div class="contianer-fluid">
        <div class="row justify-content-center">
            @foreach($imgAgainstReference as $item)
            <div class="col-6 col-md-2 co-sm-3 col-lg-3 col-xl-3  div-imagenes-cargadas card">
                <img src="{{ asset('storage/'.$item->src)}}" class="img-fluid" onclick="preview(this.src, 'Vista Previa')" alt="Resposive image">
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
<div id="modal-preview" class="modal" role="dialog" ondblclick="closeModal()">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-center">
                <span class="close" onclick="closePreviewModal()">&times;</span>
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
    .container-image-database {
        border: 2px dashed;
    }

    .container-delete-image {
        /*background-color: rgb(0%, 59%, 53%);*/
    }

    .container-delete-image input {
        border: solid 1px;
    }

    .div-imagenes-cargadas img {
        cursor: pointer;
    }

    .ckeckbox-table {
        margin-top: 0.7em;
        margin-left: 1.7em;
    }

    .ckeckbox-table:focus {
        color: green;
        outline: 0;
    }
</style>
