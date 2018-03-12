@extends('private.layouts.app')
@section('title')
    NUEVO POST
@endsection
@section('datails')
    BITACORA
@endsection
@section('styles')
    {{--  <link href="components/inputFile/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="components/inputFile/themes/explorer-fa/theme.css" media="all" rel="stylesheet" type="text/css"/>  --}}
@endsection
@section('javascript')
    {{--  <script src="components/inputFile/js/fileinput.js" type="text/javascript"></script>
    <script src="components/inputFile/js/locales/fr.js" type="text/javascript"></script>
    <script src="components/inputFile/js/locales/es.js" type="text/javascript"></script>
    <script src="components/inputFile/themes/explorer-fa/theme.js" type="text/javascript"></script>
    <script src="components/inputFile/themes/fa/theme.js" type="text/javascript"></script>
    <script src="js/new-post.js"></script>  --}}
@endsection
@section('content')
<div class="container-fluid">    
    <form action="{{ asset('contra-referencia\guardar') }}" method="POST" enctype="multipart/form-data"> 
        {{ csrf_field()}}                   
        <div class="row">                        
            <div class="col text-center">
                <h1>DR. Jose Rafael Mora Solera</h1>    
                <h2>CONTRAREFERENCIA</h2>                
            </div>                        
        </div>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="row row-files">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 sub-title-section">  
                    <h2 class="text-center">Información personal del paciente</h2>                  
                </div> 
                </div>
        <div class="row">
            <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">              
                <div class="form-group">
                    <label for="identificationCard">Cédula</label>
                    <input class="form-control" type="text" name="identificationCard" placeholder="Cédula" required/>                        
                </div>                          
            </div>                        
            <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">       
                <div class="form-group">
                    <label for="patientName">Paciente</label>
                    <input class="form-control" type="text" name="patientName" placeholder="Paciente" required/>                        
                </div>                 
            </div>                        
            <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">       
                <div class="form-group">
                    <label for="id_user">Referidor</label>
                    <input class="form-control" type="text" name="id_user" placeholder="Referidor"/>                        
                </div>                    
            </div>                         
            <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">       
                <div class="form-group">
                    <label for="dentalOrgan">Organo Dental</label>
                    <input class="form-control" type="text" name="dentalOrgan" placeholder="Organo Dental"/>                        
                </div>                    
            </div>                        
            <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">       
                <div class="form-group">
                    <label for="">Diagnóstico Pulpar</label>
                    <input class="form-control" type="text" name="pulparDiagnosis" placeholder="Organo Dental"/>                        
                </div>                    
            </div>                        
            <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">       
                    <div class="form-group">
                        <label for="periapicalDiagnosis">Diagnóstico Periapical</label>
                        <input class="form-control" type="text" name="periapicalDiagnosis" placeholder="Diagnóstico Periapical"/>                        
                    </div>                    
                </div>                        
            <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">       
                    <label for="forecast">Pronóstico</label>
                    <select class="form-control" name="forecast">
                      <option>Bueno</option>
                      <option>Medio</option>
                      <option>Malo</option>
                    </select>
            </div>                        
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">       
                <div class="form-group">
                    <label for="startTreatment" >Inicio del Tratamiento</label>
                    <input class="form-control" name="startTreatment" type="date"/>                        
                </div>                    
            </div>                        
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">       
                <div class="form-group">
                    <label for="endTreatment">Fin del Tratamiento</label>
                    <input class="form-control" name="endTreatment" type="date"/>                        
                </div>                    
            </div>
            <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">       
                <label for="state">Estado</label>
                <select class="form-control" name="state">
                  <option>Bueno</option>
                  <option>Medio</option>
                  <option>Malo</option>
                </select>                
            </div>
        </div>                        
        <div class="row row-files">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 sub-title-section">  
                    <h2 class="text-center">Tratamientos realizados</h2>                  
                </div> 
                </div>                   
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">       
                <button class="btn btn-new-row" type="button" onclick="getModalValues()">Nuevo</button>
                    <div class="table-responsive">
                    <table class="table table-bordered" id="tableMedicion">
                        <thead class="thead-dark">
                            <tr>
                              <th>Conducto</th>
                              <th>Medición</th>
                              <th>Referencia</th>
                              <th>Lima</th>
                              <th class="text-center">Acción</th>
                            </tr>
                            </thead>
                            <tbody>                            
                            </tbody>
                    </table>
                </div>
            </div> 
        </div>
        <div class="row row-files">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 sub-title-section">  
                <h2 class="text-center">Observaciónes</h2>                  
            </div> 
            </div>
            <div class="row"> 
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 fist-div">   
                <div class="form-group">
                    <label for="recommendation">Recomendación</label>
                    <input class="form-control" type="text" name="recommendation" placeholder="Recomendación" required/>                        
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">   
                <div class="form-group">
                    <label for="provisionalMaterial">Material provisional</label>
                    <input class="form-control" type="text" name="provisionalMaterial" placeholder="Material provisional" required/>                        
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">   
                <div class="form-group">
                    <label for="observations">Obsercaciones</label>
                    <textarea class="form-control" type="text" name="observations" placeholder="Recomendación" required/></textarea>                        
                </div>
            </div>
        </div> 
        <div class="row row-files"> 
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 sub-title-section">  
                <h2 class="text-center">Archivos</h2>                     
            </div>
            </div>
            <div class="row">   
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right"> 
                <button class="btn" type="submit" onsubmit="validateForm()">Guardar</button> 
            </div>
        </div>
    </form>                            
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
        var cell2 = row.insertCell(2);
        var cell3 = row.insertCell(3);
        var cell4 = row.insertCell(4);
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
        var inputConducto = document.createElement("input");
        inputConducto.setAttribute("class", "form-control");
        inputConducto.setAttribute("name", "conduit[]");
        inputConducto.setAttribute("required", "true");
        /*/Button conducto*/
        /*Button medición*/
        var inputMedicion = document.createElement("input");
        inputMedicion.setAttribute("class", "form-control");
        inputMedicion.setAttribute("name", "measuring[]");
        inputConducto.setAttribute("required", "true");
        /*/Button medición*/
        /*Button Referencia*/
        var inputReferencia = document.createElement("input");
        inputReferencia.setAttribute("class", "form-control");
        inputReferencia.setAttribute("name", "reference[]");
        inputConducto.setAttribute("required", "true");
        /*/Button Referencia*/
        /*Button Lima*/
        var inputLima = document.createElement("input");
        inputLima.setAttribute("class", "form-control");
        inputLima.setAttribute("name", "lima[]");
        inputConducto.setAttribute("required", "true");
        /*/Button Lima*/
        btnRemove.appendChild(elimanetI);
        cell0.appendChild(inputConducto);
        cell1.appendChild(inputMedicion);
        cell2.appendChild(inputReferencia);
        cell3.appendChild(inputLima);
        cell4.appendChild(btnRemove);
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
