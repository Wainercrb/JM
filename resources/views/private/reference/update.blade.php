@extends('layouts.private')
@section('title')
    EDITAR REFERENCIA
@endsection
@section('action')
    EDITAR REFERENCIA
@endsection
@section('content')
<div class="container">
    {!!Form::model($reference, array('route' => array('reference.update', $reference->id), 'files'=> true, 'id' => 'formUserEdit'),['method' => 'PUT'])!!}
    @include('private.reference.form')
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right form-group">
      {!!Form::submit('Actualizar', ['class' => 'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
</div>
 @endsection
