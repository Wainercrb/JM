@extends('layouts.posts')
@section('title') NOTICÍAS 
@endsection 
@section('content')
<style>
  #row-post {
    animation: postAnimation;
  }

  @keyframes postAnimation {
    0% {
      opacity: 0;
      transform: translate(0px, 10px);
    }
    100% {
      opacity: 1;
      transform: translate(0px, 0px);
    }
  }
</style>
<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7 container-posts">
  <div class="container" id="newPost">
  </div>
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" id="message">
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <img id="loading" src="{{asset('/img/loading.gif')}}" class="img-fluid" alt="Responsive-image">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
  <div class="post-information">
    <h5>Acerca</h5>
    <hr>
    <p>En esta sessión podras ver nuestras noticias, algun caso de relavacia, se postiara en esta sessión </p>

  </div>
</div>
</div>
</div>
<div onload="myfuntion()" class="modal" id="modalPreview" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="container-fluid">
                <div class="row" id="previewImage">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
    <script>

    </script>
    <style>
      .container-social-networks {
        position: fixed;

      }

      .post-information {
        max-width: none;
        max-height: none;
        margin-top: 8% !important;
        width: 30%;
        position: fixed;
        margin-top: 0%;
        background-color: rebeccapurple;
      }

      .container-posts {
        margin-top: 8% !important;
      }

      .btn-more {

        float: right !important;
        position: relative !important;
        margin-bottom: -15%;
        border-radius: 50%;
        background-color: black;
        color: white;
        font-size: 80%;
      }
    </style>
    @endsection