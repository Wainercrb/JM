@extends('layouts.private')
@section('title') INICIO @endsection
@section('datails') INICIO @endsection
@section('action') TRABAJOS PENDIENTES
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @Include('messages.errors')
        </div>
        @if (auth()->user()->hasRole('Admin'))
            @if(!isset($reference) || count($reference) === 0)
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <h1 class="text-center" style="padding: 3em 0em 6em 0em">
                      No tines tareas pendientes :-)
                  </h1>
              </div>
            @endif
        @foreach($reference as $item)
        <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 card-task">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-list">
                        </i>
                    </div>
                    <div class="mr-5">
                        {{$item->patient}}
                    </div>
                    <h6>
                        {{$item->date}}
                    </h6>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('againstReference.create', ['id' => $item->id]) }}">
                    <span class="float-left">
                        Crear Contrarreferencia
                    </span>
                    <span class="float-right">
                        <i class="fa fa-angle-right">
                        </i>
                    </span>
                </a>
            </div>
        </div>
        @endForeach
          @endIf
          @if (auth()->user()->hasRole('Guest'))
            @if(!isset($reference) || count($reference) === 0)
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <h1 class="text-center" style="padding: 3em 0em 6em 0em">
                      No tines tareas pendientes :-)
                  </h1>
              </div>
          @endif
        @foreach($reference as $item)
        <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 card-task">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-list">
                        </i>
                    </div>
                    <div class="mr-5">
                        {{$item->patient}}
                    </div>
                    <h6>
                        {{$item->date}}
                    </h6>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('AgainstReference.finalize', ['id' => 12]) }}">
                    <span class="float-left">
                        Finalizar Contrarreferencia
                    </span>
                    <span class="float-right">
                        <i class="fa fa-angle-right">
                        </i>
                    </span>
                </a>
            </div>
        </div>
        @endForeach @endIf
    </div>
</div>
<style>
    .card-task {
        padding: 0% 0.5% 1% 0.5%;
    }
</style>
@endsection
