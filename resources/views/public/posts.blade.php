@extends('layouts.posts') @section('title') NOTICÍAS @endsection @section('content')
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 post-information-sm">
  <h5 class="text-center">Acerca</h5>
  <hr>
  <p class="">
    En esta sessión podras ver nuestras noticias, algun caso de relavacia, se postiara en esta sessión, hecho por Jose mora
  </p>
</div>
<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 container-posts">
  <div class="container-fluid">
    <div class="row" id="rowPost">
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <img id="loading" src="{{asset('/img/loading.gif')}}" class="img-fluid" alt="Responsive-image">
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="postMessage">
    </div>
  </div>
</div>
<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
  <div class="post-information-lg">
    <h5 class="text-center">Acerca</h5>
    <hr>
    <p class="">
      En esta sessión podras ver nuestras noticias, algun caso de relavacia, se postiara en esta sessión, hecho por Jose mora
    </p>
  </div>
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalGallery">
    <button type="button" class="close">
          <span aria-hidden="true">&times;</span>
        </button>
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox" id="listMedia">
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
      </div>
    </div>
  </div>
  @endsection
