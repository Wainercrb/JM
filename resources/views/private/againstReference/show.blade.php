@extends('layouts.private')
@section('title')
    DETALLES
@endsection
@section('action')
    DETALLES CONTRARREFERENCIA
@endsection
@section('content')
<div class="container">
    {!!Form::model($againsReference)!!}
    @include('private.againstReference.formShow')
    {!!Form::close()!!}
</div>
@endsection
