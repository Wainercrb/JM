@extends('layouts.private')
@section('title') NUEVO USUARIO @endsection
@section('action') REGISTRO DE USUARIO @endsection
@section('content')
<div class="container">
    {!!Form::open(array('route' => array('user.store'), 'files'=> true, 'id' => 'formUserEdit'),['method' => 'POST'])!!}
        @include('private.user.form')
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right form-group">
            {!!Form::submit('Guardar', ['class' => 'btn btn-primary'])!!}
        </div>
    {!!Form::close()!!}
</div>
@endsection
