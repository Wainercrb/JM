@extends('users.layouts.app')
@section('title')
    USUARIOS REGISTRADOS
@endsection
@section('datails')
    Administrar / usurios
@endsection
@section('action')
    BUSQUEDA DE USUARIOS
@endsection
@section('styles')
    
@endsection
@section('javascript')

@endsection
@section('content')
<div class="form-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-md12">
                                <div class="col col-xs-6 text-center">
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                        <input class="form-control border-primary rounded-0">
                                        <button type="button" class="btn btn-sm btn-primary btn-create rounded-0">Busqueda</button>
                                    </div>
                                </div>
                            <br></div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                       <em class="fa fa-cog"></em>
                                    </th>
                                    <th class="hidden-xs text-center">ID</th>
                                    <th class="text-center">File Name</th>
                                    <th class="text-center">Artist</th>
                                    <th class="text-center">Composer</th>
                                    <th class="hidden-xs text-center">Publisher</th>
                                    <th class="hidden-xs text-center">Genre</th>
                                    <th class="hidden-xs text-center">Bitrate</th>
                                    </tr>
                            </thead>
                        <tbody id="myTable">
                            <tr>
                            <td align="center">
                            <a class="btn btn-default">
                            <em class="fa fa-pencil"></em>
                                                </a>
                                                <a class="btn btn-danger">
                                                    <em class="fa fa-trash"></em>
                                                </a>
                                            </td>
                                            <td class="hidden-xs">1</td>
                                            <td>myMp3</td>
                                            <td>amart</td>
                                            <td>am compo</td>
                                            <td>ampub</td>
                                            <td>amgen</td>
                                            <td>ambit</td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <a class="btn btn-default">
                                                    <em class="fa fa-pencil"></em>
                                                </a>
                                                <a class="btn btn-danger">
                                                    <em class="fa fa-trash"></em>
                                                </a>
                                            </td>
                                            <td class="hidden-xs">2</td>
                                            <td>myMp3</td>
                                            <td>amart</td>
                                            <td>am compo</td>
                                            <td>ampub</td>
                                            <td>amgen</td>
                                            <td>ambit</td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <a class="btn btn-default">
                                                    <em class="fa fa-pencil"></em>
                                                </a>
                                                <a class="btn btn-danger">
                                                    <em class="fa fa-trash"></em>
                                                </a>
                                            </td>
                                            <td class="hidden-xs">3</td>
                                            <td>myMp3</td>
                                            <td>amart</td>
                                            <td>am compo</td>
                                            <td>ampub</td>
                                            <td>amgen</td>
                                            <td>ambit</td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <a class="btn btn-default">
                                                    <em class="fa fa-pencil"></em>
                                                </a>
                                                <a class="btn btn-danger">
                                                    <em class="fa fa-trash"></em>
                                                </a>
                                            </td>
                                            <td class="hidden-xs">4</td>
                                            <td>myMp3</td>
                                            <td>amart</td>
                                            <td>am compo</td>
                                            <td>ampub</td>
                                            <td>amgen</td>
                                            <td>ambit</td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <a class="btn btn-default">
                                                    <em class="fa fa-pencil"></em>
                                                </a>
                                                <a class="btn btn-danger">
                                                    <em class="fa fa-trash"></em>
                                                </a>
                                            </td>
                                            <td class="hidden-xs">5</td>
                                            <td>myMp3</td>
                                            <td>amart</td>
                                            <td>am compo</td>
                                            <td>ampub</td>
                                            <td>amgen</td>
                                            <td>ambit</td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <a class="btn btn-default">
                                                    <em class="fa fa-pencil"></em>
                                                </a>
                                                <a class="btn btn-danger">
                                                    <em class="fa fa-trash"></em>
                                                </a>
                                            </td>
                                            <td class="hidden-xs">5</td>
                                            <td>myMp3</td>
                                            <td>amart</td>
                                            <td>am compo</td>
                                            <td>ampub</td>
                                            <td>amgen</td>
                                            <td>ambit</td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <a class="btn btn-default">
                                                    <em class="fa fa-pencil"></em>
                                                </a>
                                                <a class="btn btn-danger">
                                                    <em class="fa fa-trash"></em>
                                                </a>
                                            </td>
                                            <td class="hidden-xs">5</td>
                                            <td>myMp3</td>
                                            <td>amart</td>
                                            <td>am compo</td>
                                            <td>ampub</td>
                                            <td>amgen</td>
                                            <td>ambit</td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <a class="btn btn-default">
                                                    <em class="fa fa-pencil"></em>
                                                </a>
                                                <a class="btn btn-danger">
                                                    <em class="fa fa-trash"></em>
                                                </a>
                                            </td>
                                            <td class="hidden-xs">5</td>
                                            <td>myMp3</td>
                                            <td>amart</td>
                                            <td>am compo</td>
                                            <td>ampub</td>
                                            <td>amgen</td>
                                            <td>ambit</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="panel-footer">
                                <br>
                                <div class="row ">

                                    <div class="col col-md-8">1 de 90
                                    </div>
                                    <div class="col col-md-4 pull-rigth">
                                        <div class="">
                                            <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                      <li class="page-item"><a class="page-link" href="#"><<</a></li>
                                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                      <li class="page-item"><a class="page-link" href="#">>></a></li>
                                                    </ul>
                                                  </nav>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>                                                     
 @endsection