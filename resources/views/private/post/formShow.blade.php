{!!Form::token()!!}
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        @Include('messages.errors')
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 form-group">
        {!!Form::label('details', 'Detalles:')!!} {!!Form::textarea('details', old('details'), ['class' => 'form-control', 'required' => true, 'rows' => 5, 'placeholder' => '¿Que estas pensando?'])!!}
    </div>
    <div id="tabContentPost" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#img" role="tab">Imagen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#video" role="tab">Video</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="img">
                <div class="container container-tab">
                    <div class="row row-tab">
                        @if(isset($mediaPost) && count($mediaPost) > 0)
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 container-image-database">
                            <h5 class="text-center">Imagenes gurdardas</h5>
                            <div class="contianer-fluid">
                                <div class="row justify-content-center">
                                    @foreach($mediaPost as $item) @if ($item->type === 'Image')
                                    <div class="col-6 col-md-2 co-sm-3 col-lg-3 col-xl-3  div-imagenes-cargadas card">
                                        <img src="{{ asset('storage/'.$item->src)}}" class="img-fluid" onclick="preview(this.src, 'Vista Previa')" alt="Resposive image">
                                    </div>
                                    @endif @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="video">
                <div class="container container-tab">
                    <div class="row row-tab">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tableVideo">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="table-warning">url</th>
                                            <th class="text-center table-warning">Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($mediaPost)) @foreach($mediaPost as $item) @if($item->type === 'Video')
                                        <tr>
                                            <td class="table-warning">
                                                <input type="text" class="form-control" readonly="true" value="https://www.youtube.com/watch?v={{$item->src }}">
                                            </td>
                                            <td class="text-center table-warning">
                                                <div class='btn-group'>
                                                    <a class='btn btn-info' onclick="showVideo(this)"><i class='fa fa-eye'></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endif @endforeach @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-preview" class="modal" role="dialog" ondblclick="closeModal('#modal-preview')">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <span class="close" onclick="closeModal('#modal-preview')">&times;</span>
                </div>
                <div class="container justify-content-center">
                    <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 body-modal">
                        <div class="container container-modal-image text-center">
                            <img id="image-modal" src="" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                    <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footer-modal justify-content-center">
                        <h5 id="name-modal-image" class="text-center"></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="previewVideo" class="modal" role="dialog" ondblclick="closeModal('#previewVideo')">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <span class="close" onclick="closeModal('#previewVideo')">&times;</span>
                </div>
                <div class="container justify-content-center">
                    <div class="embed-responsive embed-responsive-16by9" id="prevewModal">
                    </div>
                </div>
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footer-modal justify-content-center">
                    <h5 id="name-modal-image" class="text-center"></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .tab-content {
        padding: 1em;
        border-style: solid;
        border-width: 1px;
        border-color: #DEE2E6;
        border-top: none;
        margin-bottom: 1em;
    }

    .contianer-images-db {
        padding: 1em;
        border-style: dashed;
        border-width: 2px;
        border-color: #000000;
        margin-bottom: 1em;
    }

    .title-images-db {
        margin: 0.5em 0em 1em 0em;
    }

    .container-output {
        border-color: #000000 !important;
    }
</style>
