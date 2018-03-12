@extends('users.layouts.app')
@section('title')
    NUEVO POST
@endsection
@section('datails')
    MUESTRA TU TRABAJO A TODOS
@endsection
@section('styles')
    <link href="components/inputFile/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="components/inputFile/themes/explorer-fa/theme.css" media="all" rel="stylesheet" type="text/css"/>
@endsection
@section('javascript')
    <script src="components/inputFile/js/fileinput.js" type="text/javascript"></script>
    <script src="components/inputFile/js/locales/fr.js" type="text/javascript"></script>
    <script src="components/inputFile/js/locales/es.js" type="text/javascript"></script>
    <script src="components/inputFile/themes/explorer-fa/theme.js" type="text/javascript"></script>
    <script src="components/inputFile/themes/fa/theme.js" type="text/javascript"></script>
    <script src="js/new-post.js"></script>
@endsection
@section('content')
<form class="">
    <div class="form-row">
        <div class="form-group col-md-12">
            <textarea rows="4" class="form-control" placeholder="Escribe tus puublicación aqui"></textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group form-group col-md-12">
            <h6 class="text-center">En esta sessión agregar las imagenes del post</h6>
            <div class="file-loading">
            <input id="input-pa" name="input-pa[]" type="file" multiple="multiple"></div>
        </div>
    </div>
        <div class="form-row">
        <div class="form-group form-group col-md-12">
            <button type="submit" class="btn btn-primary pull-right">Publicar</button>
        </div>
    </div>
</form>                          
@endsection