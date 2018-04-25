@extends('layouts.private')
@section('title')CONTRARREFERENCIAS @endsection
@section('action') MANTENIMIENTO CONTRARREFERENCIAS @endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          @Include('messages.errors')
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
             {!!link_to_route('againstReference.create', $title = "Nuevo", $parameters = array(), $attributes = array("class" => "btn btn-primary btn-new"))!!}
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="table-responsive">
                <table class="table table-bordered" style="width:100%" id="tableReference">
                    <thead class="thead-dark">
                        <tr>
                            <th hidden>Id</th>
                            <th>Paciente</th>
                            <th>Cédula</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
