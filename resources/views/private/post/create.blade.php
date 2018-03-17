@extends('private.layouts.app')
@section('title')
    NUEVO POST
@endsection
@section('datails')
    MUESTRA TU TRABAJO A TODOS
@endsection
@section('action')
    NUEVO POST
@endsection
@section('styles')
    
@endsection
@section('javascript')
  
@endsection
@section('content')
<div class="container">
    <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <textarea  class="form-control" name="description" placeholder="¿Que estas pensando?"></textarea>
            </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#img" role="tab">Imagen</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#video" role="tab">Video</a>
                        </li>
                      </ul>
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="img">
                            <div class="container container-tab">
                                <div class="row row-tab">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="btn-group container-input-file">
                                                    <label id="labelInputFile" onclick="callInputFile()" class="btn"><i class="fa fa-file-image-o"></i></label><input id="files" class="files" type="file" name="file[]" multiple="multiple"accept="image/x-png,image/gif,image/jpeg,image/PNG"/>
                                                    <button type="button" class="btn" id="clearFiles" onclick="removeFiles()"><i class="fa fa-trash"></i></i></button>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 container-output">
                                            <div class="row justify-content-center" id="result">  
                                                {{--  images input file  --}}
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                                                <h5 id="count-images-loaded" class="text-center">Imagnes cargadas = 0</h5>
                                            </div> 
                                        </div>
                                </div>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="video">
                                <div class="container container-tab">
                                        <div class="row row-tab">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">       
                                                        <button class="btn btn-new-row" type="button" onclick="getModalValues()">Nuevo</button>
                                                            <div class="table-responsive">
                                                            <table class="table table-bordered" id="tableMedicion">
                                                                <thead class="thead-dark">
                                                                    <tr>
                                                                      <th>url</th>
                                                                      <th class="text-center">Acción</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>                            
                                                                    </tbody>
                                                            </table>
                                                        </div>
                                                    </div> 
                                            
                                                </div>
                                                </div>
                                        </div>
                                      
                    </div>
         </div>
    </div>
</div>
<div id="modal-preview" class="modal" role="dialog"  ondblclick="closeModal()">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                    <div class="modal-header text-center">
                            <span class="close" onclick="closePreviewModal()" >&times;</span>
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
<style>
/*style for container dividers*/
.row-files {
	margin: 0em -1.7em 0em -1.7em;
	padding: 1em 0em 1em 0em;
}
.row-tab{
    border-bottom:solid 1px rgb(81%, 83%, 85%);
    border-left:solid 1px rgb(81%, 83%, 85%);
    border-right:solid 1px rgb(81%, 83%, 85%);
    padding-top:none;
    padding-left:1%;
    padding-right:1%;
}
.nav-tabs{
    margin-top:1%;
}
/*style for container dividers*/
/*style for input file*/
.sub-title-section {
	padding: 2% 0% 2% 0%;
	background-color: rgb(91%, 93%, 94%);
}

.files {
	display: none;
}

#labelInputFile {
	height: 40px;
	margin-top: 10% !important;
	background-color: #4a494e;
	color: #fff;
	border: 0px;
}

#labelInputFile {
	background-color: #4a494e;
	color: #fff;
	border: 0px;
}

#labelInputFile,
#clearFiles {
	height: 40px !important;
}

#labelInputFile:hover {
	cursor: pointer;
	-webkit-box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 0.75);
	-moz-box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 0.75);
	box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 0.75);
}

.container-input-file {
	margin: 2% 0% 0% 0%;
	padding: 1% 1% 1% 1%;
	border: 2px dashed;
	border-bottom: none;
}

/*/style for input file*/

/*style modal images*/
.container-output {
	border: 2px dashed;
	height: 5%;
	padding: 5% 0% 5% 0%;
    margin-bottom: 2em;
}

.container-modal-image {
	max-height: calc(110vh - 310px);
	overflow-y: auto;
}

#modal-preview {
	background-color: rgb(0, 0, 0);
	width: 100%;
	height: auto%;
	max-width: 100%;
}
.body-modal {
	margin: 0%;
	padding: 0%;
}

.modal-header {
	border-bottom: none;
}

.footer-modal {
	padding: 2% 0% 2% 0%;
}
.close:hover,
.close:focus {
	color: #bbb;
	text-decoration: none;
	cursor: pointer;
}

/*/style modal images*/
/*style loaded images*/
.div-imagenes-cargadas {
	padding: 0.1em 0.1em 0.1em 0.1em;
	margin: 2em 2em 2em 2em;
}
.div-imagenes-cargadas .loaded-images{
    cursor: pointer;
}
/*/style loaded images*/
/*style buttoms*/

.btn-group {
	display: inline-block;
}

.btn:hover {
	-webkit-box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 0.75);
	-moz-box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 0.75);
	box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 0.75);
}

.btn:active {
	outline: none;
	border: none;
}

.btn:focus {
	-webkit-box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 0.75);
	-moz-box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 0.75);
	box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 0.75);
}

.btnRemove {
	display: block;
	margin: auto;
}

.btn-new-row {
	margin: 2% 0% 2% 0% !important;
}
.btn {
	background-color: #4a494e;
	color: #fff;
}
/*/style buttoms*/
/* Animation modal */

.modal-footer,
#name-modal-image,
.modal-content {
	-webkit-animation-name: zoom;
	-webkit-animation-duration: 0.6s;
	animation-name: zoom;
	animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
	from {
		-webkit-transform: scale(0)
	}
	to {
		-webkit-transform: scale(1)
	}
}

@keyframes zoom {
	from {
		transform: scale(0)
	}
	to {
		transform: scale(1)
	}
}
/* Animation modal */
</style>

<script> 
/*This function adds a new row in the treatments session*/
function getModalValues() {
    try {
        var table = document.getElementById("tableMedicion");
        var row = table.insertRow(table.rows.length);
        var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var btnRemove = document.createElement("button");
        var elimanetI = document.createElement("i");
        btnRemove.setAttribute("onclick", "RemoveRow(this);");
        btnRemove.setAttribute("class", "btn btnRemove");
        elimanetI.setAttribute("class", "fa fa-trash");
        elimanetI.setAttribute("name", "btnRemove");
        btnRemove.setAttribute("style", "background-color: red;");
        btnRemove.type = "button";
        btnRemove.value = "Remove";
        /*Button conducto*/
        var inputSrc = document.createElement("input");
        inputSrc.setAttribute("class", "form-control");
        inputSrc.setAttribute("name", "url[]");
        inputSrc.setAttribute("required", "true");
        btnRemove.appendChild(elimanetI);
        cell0.appendChild(inputSrc);
        cell1.appendChild(btnRemove);
    } catch (error) {
        alert(error.message)
    }
};

/*This function calls the click event of the input file of the images*/
function callInputFile() {
    try {
        document.getElementById("files").click();

    } catch (error) {
        alert(error.message);
    }
};
/*This function delete rows of the treatments table*/
function RemoveRow(row) {
    try {
        var row = row.parentNode.parentNode;
        if (confirm("Desea elimina esta fila")) {
            var table = document.getElementById("tableMedicion");
            table.deleteRow(row.rowIndex);
        }
    } catch (error) {
        alert(error.message)
    }
};

/*This function loads the images from the input file to the previews*/
function loadImagesToPreview() {
    try {
        clearContainerImagesPreview();
        if (window.File && window.FileList && window.FileReader) {
            var preview = document.querySelector('#result');
            if (this.files) {
                [].forEach.call(this.files, readAndPreview);
            }
            function readAndPreview(file) {
                if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                    return alert(file.name + " no es una imagen");
                }
                var reader = new FileReader();
                reader.addEventListener("load", function() {
                    var containetImages = document.createElement("div");
                    containetImages.setAttribute("class", "col-md-2 co-sm-3 div-imagenes-cargadas card");
                    var image = new Image();
                    image.setAttribute("class", "img-fluid mx-auto d-block loaded-images");
                    image.setAttribute("alt", "image-responsive");
                    image.setAttribute("onclick", "preview(this.src, this.title)");
                    image.title = file.name;
                    image.src = this.result;
                    containetImages.appendChild(image);
                    preview.appendChild(containetImages);
                }, false);

                reader.readAsDataURL(file);
                setNumberFiles();
            }
        } else {
            alert("Su navegador no sorporta estos archivos");
        }
    } catch (error) {
        alert(error.message);
    }

}
document.getElementById('files').addEventListener('change', loadImagesToPreview, false);
/*This function load the number of files loaded*/
function setNumberFiles() {
    try {
        var imageLoaded = document.getElementById("files").files.length
        var labelMessage = document.getElementById("count-images-loaded")
        labelMessage.innerHTML = "IMAGENES CARGADAS = " + imageLoaded;
    } catch (error) {
        alert(error.message);
    }
}
/*This function cleans the input file and images from the preview*/
function removeFiles() {
    try {

        document.getElementById('files').value = "";
        clearContainerImagesPreview();
        var labelMessage = document.getElementById("count-images-loaded")
        labelMessage.innerHTML = "IMAGENES CARGADAS = 0";

    } catch (error) {
        alert(error.message);
    }

}
/*This function loads the image to the modal*/
function preview(value, title) {
    try {
        document.getElementById('image-modal')
            .setAttribute(
                'src', value
            );
        document.getElementById('name-modal-image').innerHTML = title;
        var modal = document.getElementById('modal-preview');
        modal.style.display = "block";

    } catch (error) {
        alert(error.message);
    }
};
/*This funtion close the modal*/
function closeModal() {
    try {
        $("#modal-preview").fadeOut();
        $("#modal-preview").fadeOut("slow");
        $("#modal-preview").fadeOut(7000);
    } catch (error) {
        alert(error.message);
    }

};
/*This funtion close the modal*/
function closePreviewModal() {
    try {
        $("#modal-preview").fadeOut();
        $("#modal-preview").fadeOut("slow");
        $("#modal-preview").fadeOut(7000);
    } catch (error) {
        error.message;
    }
}
/*Clear the input file and container preview*/
function clearContainerImagesPreview() {
    var element = document.getElementById('result');
    if (typeof(element) != 'undefined' && element != null) {
        var previewImages = document.getElementById("result");
        while (previewImages.firstChild) {
            previewImages.removeChild(previewImages.firstChild);
        }
        setNumberFiles();
    }
}
/*Check if input file is enpy*/
function inpuFileIsEmpy() {
    try {
        if (document.getElementById("files").files.length <= 0) {
            clearContainerImagesPreview();
        } 
    } catch (error) {
        error.message;
    }
}
window.onload = inpuFileIsEmpy;
</script>

@endsection