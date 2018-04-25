@extends('layouts.private')
@section('title') NUEVO POST @endsection
@section('action') NUEVO POST @endsection
@section('content')
<div class="container">
     {!!Form::open(array('route' => array('post.store'), 'files'=> true, 'id' => 'postForm'),['method' => 'POST'])!!}
        @include('private.post.form')
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right form-group">
            {!!Form::submit('Guardar', ['class' => 'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
</div>
@endsection
