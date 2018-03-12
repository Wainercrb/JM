@extends('users.layouts.app') 
@section('title') 
    NUEVO USUARIO 
@endsection
@section('datails') 
    Registro / Nuevo usuario 
@endsection 
@section('action')
    BUSQUEDA DE USUARIOS
@endsection
@section('content')
{{--  content  --}}
            <form class="">
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
                                <input
                                    type="text"
                                    class="form-control border border-secondary"
                                    id=""
                                    placeholder="Apellido Paterno"></div>
                            <div class="form-group col-md-4">
                                <input
                                    type="text"
                                    class="form-control border border-secondary"
                                    id=""
                                    placeholder="Apellido Paterno"></div>
                            <div class="form-group col-md-4">
                                <input
                                    type="password"
                                    class="form-control border border-secondary"
                                    id=""
                                    placeholder="Apellido Materno"></div>
                            <div class="form-group col-md-4">
                                <input
                                    type="text"
                                    class="form-control border border-secondary"
                                    id=""
                                    placeholder="Usuario"></div>
                            <div class="form-group col-md-4">
                                <input
                                    type="text"
                                    class="form-control border border-secondary"
                                    id=""
                                    placeholder="Contraseña"></div>
                            <div class="form-group col-md-4">
                                <select class="form-control border border-secondary" id="">
                                    <option>Rol</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input
                                    type="email"
                                    class="form-control border border-secondary"
                                    id=""
                                    placeholder="Email"></div>
                            <div class="form-group col-md-3">
                                <select class="form-control border border-secondary" id="">
                                    <option>Provincia</option>
                                    <option>San Jose</option>
                                    <option>Alajuela</option>
                                    <option>Heredia</option>
                                    <option>Cartago</option>
                                    <option>Guanacaste</option>
                                    <option>Puntarenas</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <select class="form-control border border-secondary" id="">
                                    <option>Cantón</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <select class="form-control border border-secondary" id="">
                                    <option>Distrito</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-9">
                                <input
                                    type="text"
                                    class="form-control border border-secondary"
                                    id=""
                                    placeholder="Dirección especifica"></div>
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
@endsection