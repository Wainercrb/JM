@extends('layouts.private')
@section('title')
    DETALLES DEL USUARIO
@endsection
@section('action')
    DETALLES USUARIO
@endsection
@section('content')
<div class="container">
    {!!Form::model($user)!!}
    @include('private.user.form')
    {!!Form::close()!!}
</div>
@endsection
