@extends('users.layouts.app')
@section('title')
MANTENIMIENTO
@endsection
@section('datails')
NOTIFICACIONES
@endsection
@section('content')
<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-warning o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-list"></i>
      </div>
      <div class="mr-5">11 New Tasks!</div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="#">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>
@endsection