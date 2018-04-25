@extends('layouts.private')
@section('title')
    DETALLES REFERENCIA
@endsection
@section('action')
    DETALLES REFERENCIA
@endsection
@section('content')
<div class="container">
    {!!Form::model($reference)!!}
    @include('private.reference.form')
    {!!Form::close()!!}
</div>
 @endsection
