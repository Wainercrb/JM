@extends('layouts.private')
@section('title')
    FINALIZAR CONTRARREFERENCIA
@endsection
@section('action')
    FINALIZAR CONTRARREFERENICA
@endsection
@section('content')
<div class="container">
    {!!Form::model($againsReference, array('route' => array('AgainstReference.finished', $againsReference->id_reference), 'files'=> true, 'id' => 'FormAgainstReference'),['method' => 'PUT'])!!}
    @include('private.againstReference.formShow')
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right form-group">
        <br>
       {!!Form::submit('Finalizar', ['class' => 'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
</div>
 @endsection
