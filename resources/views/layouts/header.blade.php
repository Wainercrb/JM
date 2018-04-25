<div class="container-fluid fixed-top container-navbar" id="headerTop">
    <div class="fixed-top" id="headerInfo">
        <span class="fjollaOne">
            <i class="fa fa-phone animated infinite jello">
            </i>
            2460 1169 |
            <i class="fa fa-envelope animated infinite jello">
            </i>
            jose.mora@me.com |
            <a href="https://www.facebook.com/clinicadentex/" class="header-facebook">
                <i class="fa fa-facebook animated infinite jello">
                </i>
            </a>
            |
            <a href="/" class="header-you-tube">
                <i class="fa fa-youtube-play animated infinite jello">
                </i>
            </a>
        </span>
    </div>
    <div class="container" id="containerHeader">
        <nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
            <a class="navbar-brand d-flex w-47 mr-auto" href="/">
                <img alt="" class="rounded mx-auto d-block animated infinite rubberBand" height="60" id="logo" src="{{asset('img/logoHeader.png')}}" width="100">
                </img>
            </a>
            <button class="navbar-toggler" data-target="#hederLiks" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="navbar-collapse collapse w-100" id="hederLiks">
                <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                    <li class="nav-item">
                        {!!link_to('/', 'INICIO', $attributes = ['class' => 'nav-link active'], $secure = null)!!}
                    </li>
                    <li class="nav-item">
                        {!!link_to('/perfil', 'PERFIL', $attributes = ['class' => 'nav-link'], $secure = null)!!}
                    </li>
                    <li class="nav-item">
                        {!!link_to('/noticias', 'NOTICIAS', $attributes = ['class' => 'nav-link'], $secure = null)!!}
                    </li>
                    <li class="nav-item">
                        {!!link_to('/login', 'MI-APP', $attributes = ['class' => 'nav-link'], $secure = null)!!}
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
