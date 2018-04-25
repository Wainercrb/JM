@extends('layouts.private')
@section('title') USUARIOS @endsection
@section('action') MANTENIMIENTO USUARIOS @endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          @Include('messages.errors')
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
             {!!link_to_route('user.create', $title = "Nuevo", $parameters = array(), $attributes = array("class" => "btn btn-primary btn-new"))!!}
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="table-responsive">
                <table class="table table-bordered" style="width:100%" id="tableUsers">
                    <thead class="thead-dark">
                        <tr>
                            <th hidden>Id</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
