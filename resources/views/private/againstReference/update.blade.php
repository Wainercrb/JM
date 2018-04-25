@extends('layouts.private')
@section('title')
    FINALIZAR CONTRARREFERENCIA
@endsection
@section('action')
    FINALIZAR CONTRARREFERENICA
@endsection
@section('content')
<div class="container">
    {!!Form::model($againsReference, array('route' => array('againstReference.update', $againsReference->id), 'files'=> true, 'id' => 'FormAgainstReference'),['method' => 'PUT'])!!}
    @include('private.againstReference.form')
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right form-group">
       {!!Form::submit('Actualizar', ['class' => 'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
</div>
 @endsection
