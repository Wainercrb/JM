@extends('layouts.private')
@section('title')
    EDITAR CONTRARREFERENCIA
@endsection
@section('action')
    EDITAR CONTRARREFERENICA
@endsection
@section('content')
<div class="container">
    {!!Form::model($post)!!}
      @include('private.post.formShow')
    {!!Form::close()!!}
</div>
 @endsection
