@extends('layouts.private')
@section('title')
    ELIMINAR USUARIO
@endsection
@section('action')
    ELIMINAR USUARIO
@endsection
@section('content')
<div class="container">
    {!!Form::model($user, array('route' => array('user.destroy', $user->id)),['method' => 'DELETE'])!!}
    <div class="alert alert-danger text-center" role="alert">
        ¿Realmente desea eliminar este usuario?
    </div>
    @include('private.user.form')
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right form-group">
        {!!Form::submit('Eliminar', ['class' => 'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
</div>
@endsection
