@extends('auth.layouts.app')
@section('content')
<div class="container bg-dark">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">Inicio de sessión</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Usurio o Email</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Recordar</label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="index.html">Verificar</a>
        </form>
        <div class="text-center">
          <a class="d-block small" href="forgot-password.html">¿Olvido su contraseña?</a>
        </div>
      </div>
    </div>
  </div>
@endsection