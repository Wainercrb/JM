@extends('layouts.private')
@section('title')
    EDITAR CONTRARREFERENCIA
@endsection
@section('action')
    EDITAR CONTRARREFERENICA
@endsection
@section('content')
<div class="container">
    {!!Form::model($post, array('route' => array('post.update', $post->id), 'files'=> true, 'id' => 'post'),['method' => 'PUT'])!!}
    @include('private.post.form')
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right form-group">
            {!!Form::submit('Editar', ['class' => 'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
</div>
 @endsection
