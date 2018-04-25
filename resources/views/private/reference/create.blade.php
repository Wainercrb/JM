@extends('layouts.private')
@section('title') NUEVA REFERENCIA @endsection
@section('action') NUEVA REFERENCIA @endsection
@section('content')
<div class="container">
      {!!Form::open(array('route' => array('reference.store'), 'files'=> true, 'id' => 'formReference'),['method' => 'POST'])!!}
        @include('private.reference.form')
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right form-group">
          {!!Form::submit('Guardar', ['class' => 'btn btn-primary'])!!}
        </div>
      {!!Form::close()!!}
</div>
@endsection
