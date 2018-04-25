@extends('layouts.public')
@section('content')
<div class="container container-reset">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="container row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 container-header-reset">
                    <h5 class="text-center">
                        Reestablecer contraseña
                    </h5>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 container-body-reset">
                    <div class="form-group">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                    </div>
                    {!!Form::open(array('route' => array('password.email'),'method' => 'POST'))!!}
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="form-group">
                            {!! Form::email('email', old('email'), $attributes = array('id' => 'email',
                            'placeholder' => 'Ingrese su email', 'class' => 'form-control', 
                            'autofocus' => true, 'required' => true))!!}
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('email') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        {!!Form::submit('Enviar a mi correo', 
                        ['class' => 'btn btn-primary btn-block'])!!}
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
/*footer styles*/
     .footer {
         position: fixed;
         bottom: 0;
         width: 100%;
         text-align: center;
     }
/*/end footer styles*/
</style>
@endsection
