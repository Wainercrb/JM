@extends('layouts.private')
@section('title') NUEVA CONTRARREFERENCIA @endsection
@section('action') NUEVA CONTRARREFENCIA @endsection
@section('content')
<div class="container">
     {!!Form::model($reference, array('route' => array('againstReference.store', $reference->id), 'files'=> true, 'id' => 'FormAgainstReference'),['method' => 'P0ST'])!!}
        @include('private.againstReference.form')
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right form-group">
        {!!Form::submit('Guardar', ['class' => 'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
</div>
@endsection
