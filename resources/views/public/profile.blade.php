@extends('layouts.public') 
@section('title')
    Perfil
@endsection
@section('content')
{!! Html::style(asset('./css/profile.css')) !!}
<div class="resume-header" id="resume-header" style="background-image: url({{ asset('/img/header-profile.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 container-picture">
                <img style="with:100%;height:50%;" src="{{asset('img/perfilJM.jpg')}}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 container-personal-info">
                <div class="header-infomation">
                    <h3>Dr.Jose R.Mora S.</h3>
                    <h4>MSc.Endododoncia</h4>
                </div>
                <div class="container-info">
                    <h5><stron class="font-italic">Master en Endododoncia[tratamiento de Nervio]</stron></h5>
                    <h5><stron class="font-italic">Escritor de Varios Articulos Cientificos</stron></h5>
                    <h5><stron class="font-italic">(2005-2007) Director Ejecutivo del Editorial de la Revista Científica del CCDCR. En este puesto logramos indexar la revista en INBIOMED y LATININDEX.</stron></h5>
                    <h5><stron class="font-italic">Miembro del Colegio de Cirujanos Dentistas de Costa Rica. </stron></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="resume-body">
    <div class="container main-body">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="container-resume">
                    <div class="title-resume card">
                        <h1 class="text-center">Educación</h1>
                    </div>
                    <div class="body-resume card">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="main-container-header">
                                        <div class="line-resume-container">
                                            <ul>
                                                <li>
                                                    <div class="line-resume">
                                                        <div class="icon-line-resume">
                                                            <span>
                                                  <img src="{{ asset('/img/graduation.png') }}" alt="">
                                                </span>
                                                        </div>
                                                        <div class="line-resume-li">
                                                            <div class="line-resume-head">
                                                                <h3>Agosto 2002</h3>
                                                            </div>
                                                            <div class="line-resume-content">
                                                                <p>Universidad Latinoamericana de Ciencia y Tecnología, San José, Costa Rica - Licenciatura en Odontología </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="line-resume">
                                                        <div class="icon-line-resume">
                                                            <span>
                                                  <img src="{{ asset('/img/graduation.png') }}" alt="">
                                                </span>
                                                        </div>
                                                        <div class="line-resume-li">
                                                            <div class="line-resume-head">
                                                                <h3>Agosto 2005</h3>
                                                            </div>
                                                            <div class="line-resume-content">
                                                                <p>Universidad Autónoma de San Luis Potosí, San Luis Potosí, México - Maestría en Ciencias Orales con Especialidad en Endodoncia </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="line-resume">
                                                        <div class="icon-line-resume">
                                                            <span>
                                                  <img src="{{ asset('/img/graduation.png') }}" alt="">
                                                </span>
                                                        </div>
                                                        <div class="line-resume-li">
                                                            <div class="line-resume-head">
                                                                <h3>Julio 2005
                                                  </h3>
                                                            </div>
                                                            <div class="line-resume-content">
                                                                <p>Título del mejor promedio de la generación con un promedio de 98.8. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="container-experience">
                    <div class="title-experience card">
                        <h1 class="text-center">Experiencia</h1>
                    </div>
                    <div class="body-experience">
                        <ul class="list-group">
                            <li class="list-group-item">- ENDODONCISTA, CENTRO MEDICO-ODONTOLOGICO MORASOL, SAN CARLOS, ALAJUELA - 2005-2013</li>
                            <li class="list-group-item">- PROFESOR DE ENDODONCIA, UNIVERSIDAD INTERNACIONAL DE LAS AMÉRICAS, SAN JOSE - 2005-2007</li>
                            <li class="list-group-item">- Coocreador (en conjunto con la Dra. Milagro Barquero) de la Revista Científica del CCDCR.</li>
                            <li class="list-group-item">- Director Ejecutivo del Editorial de la Revista Científica del CCDCR. En este puesto logramos indexar la revista en INBIOMED y LATININDEX</li>
                            <li class="list-group-item">- Impulsor del Código de Bioética del CCDCR y en el 2006 propuse el Capítulo II y fueron aceptados bajo mi solicitud los artículos XXX1- XXXVIII </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
