@extends('layouts.public')
@section('title') INGRESE SUS DATOS @endsection 
@section('content')
<div class="container container-public">
    <div class="row justify-content-md-center">
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="container-login text-center">
                <div class="login-header">
                    <img alt="img-responsive" class="img-fluid" src="img/loginGif.gif"/>
                </div>
                <div class="login-body">
                {!!Form::open(array('route' => array('login'),'method' => 'POST'))!!}
                    <form action="{{ route('login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                          {!! Form::email('email', old('email'), $attributes = array('id' => 'email', 
                          'placeholder' => 'Ingrese su email', 'class' => 'form-control', 'autofocus' => true))!!}
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>
                                        {{ $errors->first('email') }}
                                    </strong>
                                </span>
                                @endif
                            </input>
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                          {!! Form::password('password', $attributes = array('id' => 'password', 
                          'placeholder' => 'Ingrese su contraseña', 'class' => 'form-control', 'autofocus' => true))!!}
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>
                                        {{ $errors->first('password') }}
                                    </strong>
                                </span>
                                @endif
                            </input>
                        </div>
                        <div class="form-group text-left">
                            <div class="checkbox">
                              <label>
                                      Recordar?
                                      {!! Form::checkbox('remember', old( 'remember') ? 'checked' : '' )!!}
                                </label>
                            </div>
                        </div> 
                        <div class="form-group text-center">
                              {!!Form::submit('Ingresar', ['class' => 'btn btn-primary btn-block'])!!}
                        </div>
                        <div class="form-group text-left">
                        {!! link_to_route('password.request', $title = '¿Olvidaste tu contraseña?') !!}   
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
