<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('components/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet"> @yield('styles')
    <title>JM | @yield('title')</title>
</head>

<body class="fixed-nav sticky-footer demo-material-indigo text-white-dark" id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark demo-material-teal text-white-primary fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.html">JM-ADMINISTRADOR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="index.html">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mi página">
                    <a class="nav-link" href="charts.html">
                        <i class="fa fa-fw fa-area-chart"></i>
                        <span class="nav-link-text">Mi Página</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registro">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-wrench"></i>
                        <span class="nav-link-text">Registro</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents">
                        <li>
                            <a href="navbar.html">Nuevo Usuario</a>
                        </li>
                        <li>
                            <a href="cards.html">Nuevo Post</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-file"></i>
                        <span class="nav-link-text">Adminisrar</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                        <li>
                            <a href="{{ asset('usuarios') }}">Usuarios</a>
                        </li>
                        <li>
                            <a href="{{asset('contra-referencia')}}">Contrareferencia</a>
                        </li>
                        <li>
                            <a href="forgot-password.html">Post</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-envelope"></i>
                        <span class="d-lg-none">Mensajes
                            <span class="badge badge-pill badge-primary">Mensajes</span>
                        </span>
                        <span class="indicator text-danger d-none d-lg-block">
                            <i class="fa fa-commenting" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">Nuevos mensajes</h6>
                        <div class="dropdown-divider"></div>
                        <!--start-->
                        <a class="dropdown-item" href="#">
                            <strong>Nombre emisor</strong>
                            <span class="small float-right text-muted">00:00 AM</span>
                            <div class="dropdown-message small">Este es el compo de una pequeña descripcion
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <!--finish-->
                        <a class="dropdown-item small" href="#">Ver todos los mensajes</a>
                    </div>
                </li>
                {{--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i>
                        <span class="d-lg-none">Alerts
                            <span class="badge badge-pill badge-warning">6 New
                            </span>
                        </span>
                        <span class="indicator text-warning d-none d-lg-block">
                            <i class="fa fa-fw fa-circle"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">New Alerts:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-success">
                                <strong>
                                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update
                                </strong>
                            </span>
                            <span class="small float-right text-muted">11:21 AM
                            </span>
                            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-danger">
                                <strong>
                                    <i class="fa fa-long-arrow-down fa-fw"></i>Status Update
                                </strong>
                            </span>
                            <span class="small float-right text-muted">11:21 AM
                            </span>
                            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-success">
                                <strong>
                                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update
                                </strong>
                            </span>
                            <span class="small float-right text-muted">11:21 AM
                            </span>
                            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="#">View all alerts
                        </a>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <div class="input-group">    
                        <div id="avatar-profile" style="background-image: url('{{ asset('storage/'.auth()->user()->image)}}')"></div>
                        <a class="nav-link">
                            {{ auth()->user()->name.''.auth()->user()->surnames}}
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Cerrar Session</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">
            {{--
            <!-- Breadcrumbs-->
            <ol class="breadcrumb rounded-0">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">@yield('datails')</li>
            </ol> --}}
            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header text-center border-bottom-0 border border-secondary rounded-0">
                            <i class="fa fa-address-card text-center"></i>
                            @yield('action')
                        </div>
                        <div class="form-control border border-secondary text-left rounded-0">
                            <br> @yield('content')
                        </div>
                    </div>
                </div>
                <div>
                    <footer class="sticky-footer">
                        <div class="container">
                            <div class="text-center">
                                <small>Copyright © Your Website 2018</small>
                            </div>
                        </div>
                    </footer>
                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                    <!-- Logout Modal-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">COMFIRME</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body"> {{ auth()->user()->name.''.auth()->user()->surnames}}, esta seguro que desea cerrar sessión.</div>
                                <div class="modal-footer">
                                    <form method="POST" action="{{ route('logout')}}">
                                         {{ csrf_field() }}
                                        <button class="btn btn-secondary" type="sutmiy">Salir</button>
                                    </form>
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="{{asset('components/jquery/jquery.js')}}"></script>
                <script src="{{asset('components/bootstrap/js/bootstrap.min.js')}}"></script>
                <script src="{{asset('components/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                <script src="{{asset('components/jquery-easing/jquery.easing.min.js')}}"></script>
                <script src="{{asset('js/sb-admin.min.js')}}"></script>
                @yield('javascript')
</body>

</html>