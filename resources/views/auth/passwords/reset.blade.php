@extends('layouts.public')
@section('content')
<div class="container container-reset">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 container-header-reset">
                        <h5 class="text-center">
                            Reestablecer contraseña
                        </h5>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 container-body-reset">
                        {!!Form::open(array('route' => array('password.request'),'method' => 'POST'))!!}
                        {{ csrf_field() }}
                        <input name="token" type="hidden" value="{{ $token }}">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="control-label" for="email">
                                    Email
                                </label>
                                <div class="form-group">
                                    {!! Form::email('email',  $email or old('email'), 
                                    $attributes = array('id' => 'email','placeholder' => 'Ingrese su email', 
                                    'class' => 'form-control', 'autofocus' => true, 'required' => true))!!}
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('email') }}
                                        </strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="control-label" for="password">
                                    Contraseña
                                </label>
                                <div class="form-group">
                                    {!! Form::password('password', $attributes = array('id' => 'password',
                                        'placeholder' => 'Ingrese su nueva contraseña', 'class' => 'form-control', 
                                        'autofocus' => true, 'required' => true))!!}
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('password') }}
                                        </strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="control-label" for="password-confirm">
                                    Confirma la contraseña
                                </label>
                                <div class="form-group">
                                    {!! Form::password('password_confirmation', $attributes = array('id' => 
                                        'password-confirm','placeholder' => 'Confirme la  contraseña', 
                                        'class' => 'form-control', 'autofocus' => true, 'required' => true))!!}
                                     @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('password_confirmation') }}
                                        </strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                {!!Form::submit('Guardar', ['class' => 'btn btn-primary btn-block'])!!}
                            </div>
                            {!!Form::close()!!}
                        </input>
                    </div>
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
