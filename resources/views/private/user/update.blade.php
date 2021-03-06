@extends('layouts.private')
@section('title')
    EDITAR USUARIO
@endsection
@section('action')
    EDITAR USUARIO
@endsection
@section('content')
<div class="container">
    {!!Form::model($user, array('route' => array('user.update', $user->id), 'files'=> true, 'id' => 'formUserEdit'),['method' => 'PUT'])!!}
    @include('private.user.form')
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right form-group">
        {!!Form::submit('Actualizar', ['class' => 'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
</div>
 @endsection
