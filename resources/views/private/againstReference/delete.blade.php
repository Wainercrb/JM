@extends('layouts.private')
@section('title')
    ELIMINAR
@endsection
@section('action')
    ELIMINAR CONTRARREFERENCIA
@endsection
@section('content')
<div class="container">
    {!!Form::model($againsReference, array('route' => array('AgainstReference.destroy', $againsReference->id)),['method' => 'PUT'])!!}
    <div class="alert alert-danger text-center" role="alert">
        ¿Realmente desea eliminar esta contrarreferencia?
    </div>
    @include('private.againstReference.form')
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right form-group">
       {!!Form::submit('Eliminar', ['class' => 'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
</div>
@endsection
