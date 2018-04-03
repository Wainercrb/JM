@extends('layouts.private')
@section('title')
INICIO
@endsection
@section('datails')
INICIO
@endsection
@section('action')
TRABAJOS PENDIENTES
@endsection
@section('content')
<div class="container-fluid">
  <div class="row">
      @if (auth()->user()->role === "admin")
      @foreach($Reference as $item)
      <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 card-task">
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-list"></i>
            </div>
            <div class="mr-5">{{$item->patient}}</div>
            <h6>{{$item->date}}</h6>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="{{ route('/contra-referencia/nueva', ['id' => $item->id]) }}">
            <span class="float-left">Crear contrarreferencia</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      @endForeach
      @endIf
      @if (auth()->user()->role === "invited")
      @foreach($againsReference as $item)
      <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 card-task">
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-list"></i>
            </div>
            <div class="mr-5">{{$item->patient}}</div>
            <h6>{{$item->date}}</h6>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="{{ route('/contra-referencia/ver', ['id' => $item->id]) }}">
            <span class="float-left">Referencias respondidas</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      @endForeach
      @endIf
  </div>
</div>
<style>
  .card-task{
    padding: 0% 0.5% 1% 0.5%;
  }
</style>
@endsection