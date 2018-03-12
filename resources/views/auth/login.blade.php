@extends('auth.layouts.app')
@section('title')
INGRESE SUS DATOS
@endsection
@section('content')
<div class="container main-container-login">
    <div class="row justify-content-md-center">
       <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <div class="container-login text-center">
             <div class="login-header">
                <img src="http://www.gifs-animados.es/gifs-imagenes/d/dientes/gifs-animados-dientes-750081.gif" class="img-fluid" alt="img-responsive"/>
             </div>
             <div class="login-body">
                <form action="">
                   <div class="form-group">
                      <input class="form-control" type="text" placeholder="Usuario o email">
                   </div>
                   <div class="form-group">
                      <input class="form-control" type="password" placeholder="Contraseña" autocomplete="off">
                   </div>
                      <div class="form-group">
                        <div class="form-check text-left">
                          <input type="checkbox"/>
                          <label>Recordar?</label>
                        </div>
                      </div>
                      <div class="form-group text-center">
                          <hr>
                      <button class="btn btn-login" type="submit">Ingresar</button>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
<style>
  body{
    background-color: #4A494E;
  }
  .container-login{
    -webkit-box-shadow: 9px 7px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 9px 7px 5px 0px rgba(0,0,0,0.75);
box-shadow: 9px 7px 5px 0px rgba(0,0,0,0.75);
  }
  .main-container-login{
    margin-top: 8% !important;
  }
  .login-header{
    
    background-color:#009688;
  }
  .login-body{
    padding-top:3%!important;
    background-color:white;
  }
  .login-header, .login-body{
    padding:1% 1% 1% 1%;
    border:solid;
    border-width: 1px;
  }
  .login-header{
    border-bottom:none !important;
  }
  .btn-login{
    background-color:#009688;
    border:solid;
    border-width: 1px;
  }
  .btn-login:hover{
    background-color: #4A494E;
    color: white;
    border:solid;
    border-width: 1px;
  }
  .btn-login:focus{
    box-shadow: 0 0 5px #009688;
  }
  .login-body form .form-group .form-control{
    border:solid;
    border-width: 1px;
    color:#000;
  }
  .login-body form .form-group .form-control:focus{
    color:#4A494E;
    box-shadow: 0 0 5px #009688;
    border: none;
}

  </style>
@endsection