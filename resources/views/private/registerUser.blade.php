@extends('private.layouts.app') 
@section('title') 
    NUEVO USUARIO 
@endsection
@section('datails') 
    Registro / Nuevo usuario 
@endsection 
@section('action')
    REGISTRO DE USUARIOS
@endsection
@section('content')
{{--  content  --}}
             <form class="form-horizontal" method="POST" action="{{ route('register') }}">  
             {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group form-group col-md-3">
                        <div class="container container-avatar form-group">
                            <img
                                id="image"
                                src="https://paradiseautos.worktrucksolutions.com/Images/avatar.jpg"
                                class="img-responsive form-control"/>
                            <div class="form-control text-center center-block">
                                <label class="btn-bs-file btn  btn-primary text-center">
                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                    <input type="file" name="imagen" id="upload" accept=".png, .jpg, .jpeg"></label>
                                <label class="btn-bs-file btn  btn-primary">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    <input type="button" id="btnClear" onclick="clearInputFile()" class="btn"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-9">
                        <div class="row">
                            <div class="form-group col-md-4">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-9 control-label">Name</label>

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control border border-secondary" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                </div>
                            <div class="form-group col-md-4">
                                
                            <div class="form-group{{ $errors->has('surnames') ? ' has-error' : '' }}">
                            <label for="surnames" class="col-md-9 control-label">surnames</label>

                            <div class="col-md-9">
                                <input id="surnames" type="text" class="form-control border border-secondary" name="surnames" value="{{ old('surnames') }}" required autofocus>

                                @if ($errors->has('surnames'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surnames') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                </div>
                            <div class="form-group col-md-4">
                            <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="code" class="col-md-9 control-label">code</label>

                            <div class="col-md-9">
                                <input id="code" type="text" class="form-control border border-secondary" name="code" value="{{ old('code') }}" required autofocus>

                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                              </div>
                            <div class="form-group col-md-4">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-9 control-label">E-Mail Address</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control border border-secondary" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                               
                               </div>
                            <div class="form-group col-md-4">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-9 control-label">Password</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control border border-secondary" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                </div>
                            <div class="form-group col-md-4">
                            <div class="form-group">
                            <label for="password-confirm" class="col-md-9 ">Confirm Password</label>

                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control border border-secondary" name="password_confirmation" required>
                            </div>
                        </div>
                          </div>
                            <div class="form-group col-md-9">
                            <div class="form-group">
                            <div class="col-md-9 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </form>
@endsection