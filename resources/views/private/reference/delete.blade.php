@extends('layouts.private')
@section('title')
    ELIMINAR
@endsection
@section('action')
    ELIMINAR REFERENCIA
@endsection
@section('content')
<div class="container">
    {!!Form::model($reference, array('route' => array('reference.destroy', $reference->id)),['method' => 'POST'])!!}
    <div class="alert alert-danger text-center" role="alert">
        ¿Realmente desea eliminar esta referencia?
    </div>
    @include('private.reference.form')
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right form-group">
      {!!Form::submit('Eliminar', ['class' => 'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
</div>
@endsection
