@extends('home.layouts.app')
@section('title')
INICIO
@endsection
@section('files-css')
<link href="home-files/index.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div id="carousel-header" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-header" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-header" data-slide-to="1"></li>
            <li data-target="#carousel-header" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active pull-left">
                <img class="d-block w-100" src="https://www.healthysmile.com/images/service-banner-4.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Titulo del carusel</h5>
                    <p>Contenido del corusel</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.healthysmile.com/images/service-banner-4.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p>Contenido del corusel</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.healthysmile.com/images/service-banner-4.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p>Contenido del corusel</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-header" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-header" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container container-services">
        <h1 class="text-center">SERVICIOS</h1>
        <div class="row">
            <div class="col">
                <hr class="section-divider">
            </div>
            <div class="col">
                <p class="text-center">Servicios a los precios más bajos</p>
    
            </div>
            <div class="col">
                <hr class="section-divider">
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
                <div class="container cont-img-service">
                    <img src="icons/braces.png" class="img-fluid img-responsive img-services" />
                    <hr class="divider-img">
                    <h5 class="text-center">servicio</h5>
                    <p class="text-center">
                        <a href="#">Más</a>
                    </p>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
                <div class="container cont-img-service">
                    <img src="icons/braces.png" class="img-fluid img-responsive img-services" />
                    <hr class="divider-img">
                    <h5 class="text-center">servicio</h5>
                    <p class="text-center">
                        <a href="#">Más</a>
                    </p>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
                <div class="container cont-img-service">
                    <img src="icons/braces.png" class="img-fluid img-responsive img-services" />
                    <hr class="divider-img">
                    <h5 class="text-center">servicio</h5>
                    <p class="text-center">
                        <a href="#">Más</a>
                    </p>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
                <div class="container cont-img-service">
                    <img src="icons/braces.png" class="img-fluid img-responsive img-services" />
                    <hr class="divider-img">
                    <h5 class="text-center">servicio</h5>
                    <p class="text-center">
                        <a href="#">Más</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-benefit">
        <h1 class="text-center">BENEFICIOS</h1>
        <div class="row">
            <div class="col">
                <hr class="section-divider">
            </div>
            <div class="col">
                <p class="text-center">para satisfacer tus necesidades</p>
            </div>
            <div class="col">
                <hr class="section-divider">
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
                <div class="container cont-img-benefit">
                    <img src="icons/braces.png" class="img-fluid img-responsive img-benefif" />
                    <hr class="divider-img">
                    <h5 class="text-center">servicio</h5>
                    <p class="text-center">
                        <a href="#">Más</a>
                    </p>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
                <div class="container cont-img-benefit">
                    <img src="icons/braces.png" class="img-fluid img-responsive img-benefif" />
                    <hr class="divider-img">
                    <h5 class="text-center">servicio</h5>
                    <p class="text-center">
                        <a href="#">Más</a>
                    </p>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
                <div class="container cont-img-benefit">
                    <img src="icons/braces.png" class="img-fluid img-responsive img-benefif" />
                    <hr class="divider-img">
                    <h5 class="text-center">servicio</h5>
                    <p class="text-center">
                        <a href="#">Más</a>
                    </p>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
                <div class="container cont-img-benefit">
                    <img src="icons/braces.png" class="img-fluid img-responsive img-benefif" />
                    <hr class="divider-img">
                    <h5 class="text-center">servicio</h5>
                    <p class="text-center">
                        <a href="#">Más</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-testimonies">
        <div class="container">
            <h1 class="text-center">TESTIMONIOS</h1>
            <div class="row">
                <div class="col">
                    <hr class="section-divider">
                </div>
                <div class="col">
                    <p class="text-center">Personas satisfechas por nuestro trabajo</p>
    
                </div>
                <div class="col">
                    <hr class="section-divider">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="line-benefits">
                        <li>
                            <div class="line-benefits-badge info">
                                <img class="img-cases rounded-circle" src="http://cdn2.stylecraze.com/wp-content/uploads/2013/07/2213-10-Pictures-Of-Emma-Watson-Without-Makeup.jpg"
                                    class="img-fluid" alt="Responsive image" />
                            </div>
                            <div class="line-benefits-panel">
                                <div class="line-benefits-heading">
                                    <h4 class="line-benefits-title">Martha Soto Soto</h4>
                                </div>
                                <div class="line-benefits-body">
                                    <p>
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam
                                        sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida
                                        a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet
                                        venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue
                                        <i class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="line-benefits-inverted">
                            <div class="line-benefits-badge warning">
                                <img class="img-cases rounded-circle" src="http://cdn2.stylecraze.com/wp-content/uploads/2013/07/2213-10-Pictures-Of-Emma-Watson-Without-Makeup.jpg"
                                    class="img-fluid" alt="Responsive image" />
                            </div>
                            <div class="line-benefits-panel">
                                <div class="line-benefits-heading">
                                    <h4 class="line-benefits-title">Martha Soto Soto </h4>
                                </div>
                                <div class="line-benefits-body">
                                    <p>
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam
                                        sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida
                                        a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet
                                        venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue
                                        <i class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="line-benefits-badge">
                                <img class="img-cases rounded-circle" src="http://cdn2.stylecraze.com/wp-content/uploads/2013/07/2213-10-Pictures-Of-Emma-Watson-Without-Makeup.jpg"
                                    class="img-fluid" alt="Responsive image" />
                            </div>
                            <div class="line-benefits-panel">
                                <div class="line-benefits-heading">
                                    <h4 class="line-benefits-title">Martha Soto Soto</h4>
                                </div>
                                <div class="line-benefits-body">
                                    <p>
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam
                                        sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida
                                        a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet
                                        venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue
                                        <i class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="line-benefits-inverted">
                            <div class="line-benefits-badge default">
                                <img class="img-cases rounded-circle" src="http://cdn2.stylecraze.com/wp-content/uploads/2013/07/2213-10-Pictures-Of-Emma-Watson-Without-Makeup.jpg"
                                    class="img-fluid" alt="Responsive image" />
                            </div>
                            <div class="line-benefits-panel">
                                <div class="line-benefits-heading">
                                    <h4 class="line-benefits-title">Martha Soto Soto</h4>
                                </div>
                                <div class="line-benefits-body">
                                    <p>
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam
                                        sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida
                                        a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet
                                        venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue
                                        <i class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="line-benefits-badge">
                                <img class="img-cases rounded-circle" src="http://cdn2.stylecraze.com/wp-content/uploads/2013/07/2213-10-Pictures-Of-Emma-Watson-Without-Makeup.jpg"
                                    class="img-fluid" alt="Responsive image" />
                            </div>
                            <div class="line-benefits-panel">
                                <div class="line-benefits-heading">
                                    <h4 class="line-benefits-title">LMartha Soto Soto</h4>
                                </div>
                                <div class="line-benefits-body">
                                    <p>
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam
                                        sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida
                                        a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet
                                        venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue
                                        <i class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="line-benefits-inverted">
                            <div class="line-benefits-badge default">
                                <img class="img-cases rounded-circle" src="http://cdn2.stylecraze.com/wp-content/uploads/2013/07/2213-10-Pictures-Of-Emma-Watson-Without-Makeup.jpg"
                                    class="img-fluid" alt="Responsive image" />
                            </div>
                            <div class="line-benefits-panel">
                                <div class="line-benefits-heading">
                                    <h4 class="line-benefits-title">Martha Soto Soto</h4>
                                </div>
                                <div class="line-benefits-body">
                                    <p>
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam
                                        sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida
                                        a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet
                                        venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue
                                        <i class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 
@endsection
@section('files-js')
<script src="home-files/index.js" type="text/javascript"></script>
@endsection