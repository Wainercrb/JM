@extends('auth.layouts.app')
@section('title')
INGRESE SUS DATOS
@endsection
@section('content')
<div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">
         <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Conxole Admin"/>      </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Usuario o email">
                </div>
                <div class="form-group">
                  <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Contraseña">
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Recordar</label>
                  </div>
                </div>
                <a class="btn btn-primary btn-block" href="index.html">Verificar</a>
              </form><br>
              <div class="text-center">
                <a class="d-block small" href="forgot-password.html">¿Olvido su contraseña?</a>
              </div>
        </div>
     </div>
  </div>
@endsection