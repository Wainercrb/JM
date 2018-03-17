@extends('private.layouts.app')
@section('title')
NOTICÍAS
@endsection
@section('files-css')
<link rel="stylesheet" href="{{asset('home-files/posts.css')}}">
@endsection
@section('content')
<div class="container-fluid">
        <div class="row" id="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="post-container">
              <div class="header-post">
                <img class="avatar-profile" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHbUQnjVkraA3Gv0oHIvsqEsK_RlyZikekx9anBmv75FJNyuvr"
                  width="50px" height="50px" />
                <p class="name-user">wainer_rodriguez_bonilla</p>
              </div>
              <div class="body-post" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYFznOFLElBfqgd9-OGhOc7nWIISTobEEz0OqXjWHK93tO6gGPjw');"></div>
              <div class="footer-post">
                <p class="description-post">the best wommen in the work</p>
              </div>
            </div>
        </div>
    </div>
        <div class="row" id="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="post-container">
              <div class="header-post">
                <img class="avatar-profile" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHbUQnjVkraA3Gv0oHIvsqEsK_RlyZikekx9anBmv75FJNyuvr"
                  width="50px" height="50px" />
                <p class="name-user">wainer_rodriguez_bonilla</p>
              </div>
              <div class="body-post" style="background-image: url('http://www.hbcugala.com/wp-content/uploads/2017/12/Beautiful-Emma-Watson-Smile-63-About-Remodel-4k-Desktop-Backgrounds-with-Emma-Watson-Smile-500x600.jpg');"></div>
              <div class="footer-post">
                <p class="description-post">the best wommen in the work</p>
              </div>
            </div>
        </div>
    </div>
        <div class="row" id="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="post-container">
              <div class="header-post">
                <img class="avatar-profile" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHbUQnjVkraA3Gv0oHIvsqEsK_RlyZikekx9anBmv75FJNyuvr"
                  width="50px" height="50px" />
                <p class="name-user">wainer_rodriguez_bonilla</p>
              </div>
              <div class="body-post" style="background-image: url('http://www.hbcugala.com/wp-content/uploads/2017/12/Beautiful-Emma-Watson-Smile-63-About-Remodel-4k-Desktop-Backgrounds-with-Emma-Watson-Smile-500x600.jpg');"></div>
              <div class="footer-post">
                <p class="description-post">the best wommen in the work</p>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('files-js')
@endsection