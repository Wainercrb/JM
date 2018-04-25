@extends('layouts.public')
@section('title')
INICIO
@endsection
@section('content')
<div class="carousel slide" data-ride="carousel" id="carousel-header">
    <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#carousel-header">
        </li>
        <li data-slide-to="1" data-target="#carousel-header">
        </li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active pull-left">
            <img alt="First slide" class="d-block w-100" src="https://1.bp.blogspot.com/-VewvJQsh8Hg/WA6_9EkL1bI/AAAAAAAALHk/qa3abT990IwrjinjSwtAXMbsCB93SHJVgCLcB/s1600/banner1.jpg">
                <div class="carousel-caption d-none d-md-block">
                     {{-- <h5>
                        Dedicados al tratamiento integral de su salud oral.
                    </h5>
                    <p>
                     ¡su sonrisa merece más!
                    </p> --}}
                </div>
            </img>
        </div>
        <div class="carousel-item">
            <img alt="Second slide" class="d-block w-100" src="https://static.miweb.padigital.es/var/m_5/5e/5e6/3166/46503-clinica-dental-montijano-banner2.jpg?v=6.9.42384">
                <div class="carousel-caption d-none d-md-block">
                  {{--  <h1>
                        Bienvenido
                    </h1> --}}
                </div>
            </img>
        </div>
    </div>
    <a class="carousel-control-prev" data-slide="prev" href="#carousel-header" role="button">
        <span aria-hidden="true" class="carousel-control-prev-icon">
        </span>
        <span class="sr-only">
            Previous
        </span>
    </a>
    <a class="carousel-control-next" data-slide="next" href="#carousel-header" role="button">
        <span aria-hidden="true" class="carousel-control-next-icon">
        </span>
        <span class="sr-only">
            Next
        </span>
    </a>
</div>
<div class="container container-services">
    <h1 class="text-center animated infinite flipInx pacifico">
        SERVICIOS
    </h1>
    <div class="row">
        <div class="col">
            <hr class="section-divider">
            </hr>
        </div>
        <div class="col">
            <p class="text-center fjollaOne">
                Servicios a los precios más bajos
            </p>
        </div>
        <div class="col">
            <hr class="section-divider">
            </hr>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
            <div class="container cont-img-service">
                <img class="img-fluid img-responsive img-services" src="{{ asset('icons/healthy-tooth.svg') }}"/>
                <hr class="divider-img">
                    <h5 class="text-center sans-serif fjollaOne">
                        Estética
                    </h5>
                    <p class="text-center">
                      La odontología estética o cosmética es una especialidad de la odontología que soluciona problemas relacionados con la salud bucal y la armonía estética de la boca en su totalidad.
                    </p>
                </hr>
            </div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
            <div class="container cont-img-service">
                <img class="img-fluid img-responsive img-services" src="{{ asset('icons/endodoncia.svg') }}"/>
                <hr class="divider-img">
                    <h5 class="text-center fjollaOne">
                        Endodoncia
                    </h5>
                    <p class="text-center">
                       Endodoncia es el tratamiento que se realiza cuando la caries es muy profunda y toco el nervio o cuando el nervio se afecto por un golpe. La terapia endodóntica consiste en remover parcial (pulpotomías en dientes temporales) o totalmente el nervio o nervios afectados, desinfectar los conductos y posteriormente rellenarlos con un material específico, esto se hace con el fin de poder salvar el diente.
                    </p>
                </hr>
            </div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
            <div class="container cont-img-service">
                <img class="img-fluid img-responsive img-services" src="{{ asset('icons/braces.svg') }}"/>
                <hr class="divider-img">
                    <h5 class="text-center fjollaOne">
                        Ortodonicia
                    </h5>
                    <p class="text-center">
                        La ortodoncias es el  arte de prevenir, diagnosticar y corregir las posibles alteraciones en forma, posicion, relacion y funcion de las estructuras dentales y oseas. mantenerlas dentro de un estado óptimo de salud y armonía, mediante el uso y control de diferentes tipos de fuerzas utilizando aparatología. (Frenillos)
                    </p>
                </hr>
            </div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
            <div class="container cont-img-service">
                <img class="img-fluid img-responsive img-services" src="{{ asset('icons/tooth.svg') }}"/>
                <hr class="divider-img">
                    <h5 class="text-center fjollaOne">
                        Implantología
                    </h5>
                    <p class="text-center">
                        La implantología dental es la disciplina de la odontología que se ocupa del estudio de los materiales aloplásticos dentro o sobre los huesos de los maxilares para dar apoyo a una rehabilitación dental. Tiene como objetivo sustituir dientes perdidos.
                    </p>
                </hr>
            </div>
        </div>
    </div>
</div>
<div class="container container-benefit">
    <h1 class="text-center animated infinite flipInx pacifico">
        BENEFICIOS
    </h1>
    <div class="row">
        <div class="col">
            <hr class="section-divider">
            </hr>
        </div>
        <div class="col">
            <p class="text-center fjollaOne">
               Siempre pensando en los mejor, para nuestros clientes
            </p>
        </div>
        <div class="col">
            <hr class="section-divider">
            </hr>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
            <div class="container cont-img-benefit">
                <img class="img-fluid img-responsive img-benefif" src="{{ asset('icons/dental.svg') }}"/>
                <hr class="divider-img">
                    <h5 class="text-center fjollaOne">
                        Precios a tu medida
                    </h5>
                    <p class="text-left">
                        Contamos con los mejores precios de la zona, accesible a cualquier persona.
                    </p>
                </hr>
            </div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
            <div class="container cont-img-benefit">
                <img class="img-fluid img-responsive img-benefif" src="{{ asset('icons/dental.svg') }}"/>
                <hr class="divider-img">
                    <h5 class="text-center fjollaOne">
                        Buenas Instalaciones
                    </h5>
                    <p class="text-left">
                        Nuestras instalaciones, están en óptimas condiciones, garantizando el confort de nuestros clientestes.
                    </p>
                </hr>
            </div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
            <div class="container cont-img-benefit">
                <img class="img-fluid img-responsive img-benefif" src="{{ asset('icons/dental.svg') }}"/>
                <hr class="divider-img">
                    <h5 class="text-center fjollaOne">
                        Servivio profecional
                    </h5>
                    <p class="text-left">
                        Contamos con la formación académica necesaria y experiencia, de más de 10 años.
                    </p>
                </hr>
            </div>
        </div>
        <div class="col-6 col-sm-3 col-lg-3 col-xl-3">
            <div class="container cont-img-benefit">
                <img class="img-fluid img-responsive img-benefif" src="{{ asset('icons/dental.svg') }}"/>
                <hr class="divider-img">
                    <h5 class="text-center fjollaOne">
                        Tecnología de Primera
                    </h5>
                    <p class="text-left">
                        Contamos con equipo tecnológico actualizado, mejorando la experiencia de nuestros clientes.
                    </p>
                </hr>
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
                            <img class="img-cases rounded-circle" src="http://cdn2.stylecraze.com/wp-content/uploads/2013/07/2213-10-Pictures-Of-Emma-Watson-Without-Makeup.jpg" class="img-fluid" alt="Responsive image" />
                        </div>
                        <div class="line-benefits-panel">
                            <div class="line-benefits-heading">
                                <h4 class="line-benefits-title">Martha Soto Soto</h4>
                            </div>
                            <div class="line-benefits-body animated">
                                <p>
                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue
                                    <i class="fa fa-quote-right"></i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="line-benefits-inverted">
                        <div class="line-benefits-badge warning">
                            <img class="img-cases rounded-circle" src="http://cdn2.stylecraze.com/wp-content/uploads/2013/07/2213-10-Pictures-Of-Emma-Watson-Without-Makeup.jpg" class="img-fluid" alt="Responsive image" />
                        </div>
                        <div class="line-benefits-panel">
                            <div class="line-benefits-heading">
                                <h4 class="line-benefits-title">Martha Soto Soto </h4>
                            </div>
                            <div class="line-benefits-body">
                                <p>
                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue
                                    <i class="fa fa-quote-right"></i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="line-benefits-badge">
                            <img class="img-cases rounded-circle" src="http://cdn2.stylecraze.com/wp-content/uploads/2013/07/2213-10-Pictures-Of-Emma-Watson-Without-Makeup.jpg" class="img-fluid" alt="Responsive image" />
                        </div>
                        <div class="line-benefits-panel">
                            <div class="line-benefits-heading">
                                <h4 class="line-benefits-title">Martha Soto Soto</h4>
                            </div>
                            <div class="line-benefits-body">
                                <p>
                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue
                                    <i class="fa fa-quote-right"></i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="line-benefits-inverted">
                        <div class="line-benefits-badge default">
                            <img class="img-cases rounded-circle" src="http://cdn2.stylecraze.com/wp-content/uploads/2013/07/2213-10-Pictures-Of-Emma-Watson-Without-Makeup.jpg" class="img-fluid" alt="Responsive image" />
                        </div>
                        <div class="line-benefits-panel">
                            <div class="line-benefits-heading">
                                <h4 class="line-benefits-title">Martha Soto Soto</h4>
                            </div>
                            <div class="line-benefits-body">
                                <p>
                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue
                                    <i class="fa fa-quote-right"></i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="line-benefits-badge">
                            <img class="img-cases rounded-circle" src="http://cdn2.stylecraze.com/wp-content/uploads/2013/07/2213-10-Pictures-Of-Emma-Watson-Without-Makeup.jpg" class="img-fluid" alt="Responsive image" />
                        </div>
                        <div class="line-benefits-panel">
                            <div class="line-benefits-heading">
                                <h4 class="line-benefits-title">LMartha Soto Soto</h4>
                            </div>
                            <div class="line-benefits-body">
                                <p>
                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue
                                    <i class="fa fa-quote-right"></i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="line-benefits-inverted">
                        <div class="line-benefits-badge default">
                            <img class="img-cases rounded-circle" src="http://cdn2.stylecraze.com/wp-content/uploads/2013/07/2213-10-Pictures-Of-Emma-Watson-Without-Makeup.jpg" class="img-fluid" alt="Responsive image" />
                        </div>
                        <div class="line-benefits-panel">
                            <div class="line-benefits-heading">
                                <h4 class="line-benefits-title">Martha Soto Soto</h4>
                            </div>
                            <div class="line-benefits-body">
                                <p>
                                    <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue
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
