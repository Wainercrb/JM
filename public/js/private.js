$("#FormAgainstReference").submit(function(event) {
  var validate = true;
  $('#againstReferenceTable').find('tr input').each(function() {
    if ($(this).val() == "") {
      $(this).css({
        "border-color": "red"
      });
      validate = false;
    } else {
      $(this).css({
        "border-color": "green"
      });
    }
  });
  if (validate) {
    return true;
  } else {
    alert("La tabla de los tratamientos posee valores vacios")
    return false;
  }
  event.preventDefault();
});
$.validator.addMethod(
  "strongPassword",
  function(value, element) {
    return (
      this.optional(element) ||
      (value.length >= 6 && /\d/.test(value) && /[a-z]/i.test(value))
    );
  },
  "Su contraseña debe tener al menos 6 caracteres y contener al menos un número y un carácter"
);

$.validator.addMethod(
  "roleSelect",
  function(value, element, arg) {
    return arg !== value;
  },
  "Seleccione un rol"
);
$.validator.addMethod(
  "forecastSelect",
  function(value, element, arg) {
    return arg !== value;
  },
  "Seleccione un estado"
);


$("#formUserRegister").validate({
  rules: {
    name: {
      required: true,
      minlength: 2,
      maxlength: 15
    },
    email: {
      required: true,
      email: true
    },
    surnames: {
      required: true,
      minlength: 2,
      maxlength: 30
    },
    code: {
      required: true,
      minlength: 2,
      maxlength: 15
    },
    password: {
      required: true,
      strongPassword: true
    },
    passwordAgain: {
      equalTo: "#password"
    },
    role: {
      roleSelect: "Seleccione"
    }
  },
  messages: {
    name: {
      required: "Ingrese un nombre",
      minlength: "Ingrese un nombre con más caracteres",
      maxlength: "Ingrese un nombre con menos caracteres"
    },
    email: {
      required: "Ingrese un email.",
      email: "Ingrese un email valido."
    },
    surnames: {
      required: "Ingrese los apellidos",
      minlength: "Ingrese los apellidos con más caracteres",
      maxlength: "Ingrese los apellidos con menos caracteres"
    },
    code: {
      required: "Ingrese el codigo",
      minlength: "Ingrese un codigo con más caracteres",
      maxlength: "Ingrese un codigo con menos caracteres"
    },
    password: {
      required: "Ingrese una contraseña"
    },
    passwordAgain: {
      equalTo: "Los contraseñas deben ser iguales"
    }
  }
});

$("#postForm").validate({
  rules: {
    details: {
      required: true,
      minlength: 1,
      maxlength: 1000
    }
  },
  messages: {
    details: {
      required: "Ingrese el contenido del post",
      minlength: "Este campo requiere más caracteres",
      maxlength: "Este campo requiere menos caracteres"
    }
  }
});

$("#formReference").validate({
  rules: {
    patient: {
      required: true,
      minlength: 2,
      maxlength: 40
    },
    birthDate: {
      required: true,
      date: true
    },
    identificationCard: {
      required: true,
      minlength: 4,
      maxlength: 15
    },
    phone: {
      required: true,
      minlength: 4,
      maxlength: 10
    },
    referredAnalgesic: {
      required: true,
      minlength: 2,
      maxlength: 30
    },
    referredAntibioticesic: {
      required: true,
      minlength: 2,
      maxlength: 30
    },
    observations: {
      required: true,
      minlength: 2,
      maxlength: 60
    }
  },
  messages: {
    patient: {
      required: "Paiente requerido",
      minlength: "Este campo requiere más caracteres",
      maxlength: "Este campo requiere menos caracteres"
    },
    birthDate: {
      required: "Fecha de nacimeinto requerida",
      date: "Ingrese una fecha valida"
    },
    identificationCard: {
      required: "Cédula requerida",
      minlength: "Este campo requiere más caracteres",
      maxlength: "Este campo requiere menos caracteres"
    },
    phone: {
      required: "Teléfono requerido",
      minlength: "Este campo requiere más caracteres",
      maxlength: "Este campo requiere menos caracteres"
    },
    referredAnalgesic: {
      required: "Analgesico requerido",
      minlength: "Este campo requiere más caracteres",
      maxlength: "Este campo requiere menos caracteres"
    },
    referredAntibioticesic: {
      required: "Antibiótico requerido",
      minlength: "Este campo requiere más caracteres",
      maxlength: "Este campo requiere menos caracteres"
    },
    observations: {
      required: "Observación requerida",
      minlength: "Este campo requiere más caracteres",
      maxlength: "IEste campo requiere menos caracteres"
    }
  }
});
$("#FormAgainstReference").validate({
  ignore: ".table_input",
  rules: {
    identificationCard: {
      required: true
    },
    patient: {
      required: true
    },
    name: {
      required: true
    },
    dentalOrgan: {
      required: true,
      minlength: 2,
      maxlength: 30
    },
    pulparDiagnosis: {
      required: true,
      minlength: 2,
      maxlength: 30
    },
    periapicalDiagnosis: {
      required: true,
      minlength: 2,
      maxlength: 60
    },
    forecast: {
      forecastSelect: "Seleccione"
    },
    startTreatment: {
      required: true,
      date: true
    },
    endTreatment: {
      required: true,
      date: true
    },
    recommendation: {
      required: true,
      minlength: 2,
      maxlength: 60
    },
    provisionalMaterial: {
      required: true,
      minlength: 2,
      maxlength: 60
    },
    observations: {
      required: true,
      minlength: 2,
      maxlength: 60
    }
  },
  messages: {
    identificationCard: {
      required: "Cédula del paciente requerido"
    },
    patient: {
      required: "Paciente requerido"
    },
    name: {
      required: "Referidor requerida"
    },
    dentalOrgan: {
      required: "Organo dental requerido",
      minlength: "Este campo requiere más caracteres",
      maxlength: "Este campo requiere menos caracteres"
    },
    pulparDiagnosis: {
      required: "Diagnostico pulpar requerido",
      minlength: "Este campo requiere más caracteres",
      maxlength: "Este campo requiere menos caracteres"
    },
    periapicalDiagnosis: {
      required: "Diagnostico peridiacal requerido",
      minlength: "Este campo requiere más caracteres",
      maxlength: "Este campo requiere menos caracteres"
    },
    forecast: {
      forecastSelect: "Estado requerido"
    },
    startTreatment: {
      required: "Inicio del tratamiento requerido",
      date: "Ingrese una fecha valida"
    },
    endTreatment: {
      required: "Fin del tratamiento requerido",
      date: "Ingrese una fecha valida"
    },
    recommendation: {
      required: "Recomendación requerida",
      minlength: "Este campo requiere más caracteres",
      maxlength: "Este campo requiere menos caracteres"
    },
    provisionalMaterial: {
      required: "Material provicional requerido",
      minlength: "Este campo requiere más caracteres",
      maxlength: "Este campo requiere menos caracteres"
    },
    observations: {
      required: "Observación  requerido",
      minlength: "Este campo requiere más caracteres",
      maxlength: "Este campo requiere menos caracteres"
    }
  }
});

// This function calls avatar input file
function callInputFileAvatar() {
  try {
    removeInitialFiles();
    document.getElementById("avatar").click();
  } catch (error) {
    alert(error.message);
  }
}

function readURL(input) {
  try {
    if (/\.(jpe?g|png|gif)$/i.test(input.files[0].name)) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $("#avatarImage").attr("src", e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
      }
    } else {
      removeInitialFiles();
      alert("Selecciona un archivo tipo imagen");
    }
  } catch (error) {
    alert(error.message);
  }
}
// Load input image to tag image
$("#avatar").change(function() {
  if (this.value !== "") {
    readURL(this);
  }
});

/*This function cleans the input file and images from the preview*/
function removeAvatar() {
  try {
    document.getElementById("avatar").value = "";
    $("#avatarImage").attr(
      "src",
      "http://" + window.location.host + "/storage/default.png"
    );
  } catch (error) {
    alert(error.message);
  }
}

function removeInitialFiles() {
  if ($("#avatar").val()) {
    removeAvatar();
  }
}

$(document).ready(function() {
  $("#tableUsers").DataTable({
    processing: true,
    serverSide: true,
    ajax: "/userGetData",
    language: tableLanguaje(),
    columns: [{
        data: "id",
        name: "id",
        class: "idTable",
        orderable: false,
        searchable: false
      },
      {
        data: "code",
        name: "code",
        class: "tdEmail"
      },
      {
        data: "name",
        name: "name",
        class: "tdEmail"
      },
      {
        data: "surnames",
        name: "surnames",
        class: "tdEmail"
      },
      {
        data: "email",
        name: "email",
        class: "tdEmail"
      },
      {
        data: "id",
        defaultContent: '',
        orderable: false,
        searchable: false,
        class: "tdActions text-center",
        render: function(data, type, row, meta) {
          if (row.id != null) {
            return (
              "<div class='btn-group'><a class='btn btn-danger' href='http://" +
              window.location.host +
              "/usuario/confirmar/" +
              row.id +
              "'><i class='fa fa-trash'></i></a><a class='btn btn-warning' href='http://" +
              window.location.host +
              "/usuario/editar/" +
              row.id +
              "'><i class='fa fa-edit'></i></a><a class='btn btn-info' href='http://" +
              window.location.host +
              "/usuario/ver/" +
              row.id +
              "'><i class='fa fa-eye'></i></a></div>"
            );
          } else {
            return "No posee id";
          }
        }
      }
    ]
  });
  $("#tablePost").DataTable({
    processing: true,
    serverSide: true,
    ajax: "postGetData",
    language: tableLanguaje(),
    columns: [{
        data: "date",
        name: "date",
        class: "date",
        id: 'dateTablePost'
      },
      {
        data: "details",
        name: "details",
        class: "details"
      },
      {
        data: "id",
        defaultContent: '',
        orderable: false,
        searchable: false,
        class: "tdActions text-center",
        render: function(data, type, row, meta) {
          if (row.id != null) {
            return (
              "<div class='btn-group'><a class='btn btn-danger' href='http://" +
              window.location.host +
              "/post/confirmar/" +
              row.id +
              "'><i class='fa fa-trash'></i></a><a class='btn btn-warning' href='http://" +
              window.location.host +
              "/post/editar/" +
              row.id +
              "'><i class='fa fa-edit'></i></a><a class='btn btn-info' href='http://" +
              window.location.host +
              "/post/ver/" +
              row.id +
              "'><i class='fa fa-eye'></i></a></div>"
            );
          } else {
            return "No posee id";
          }
        }
      }
    ]
  });
  $("#tableReferenceAdmin").DataTable({
    processing: true,
    serverSide: true,
    ajax: "/referenceGetData",
    language: tableLanguaje(),
    columns: [{
        data: "patient",
        name: "patient"
      },
      {
        data: "identificationCard",
        name: "identificationCard"
      },
      {
        data: "date",
        name: "date"
      },
      {
        data: "id",
        defaultContent: '',
        orderable: false,
        searchable: false,
        class: "tdActions text-center",
        render: function(data, type, row, meta) {
          var btnAgainstReference = "";
          var btnDelete = "";
          if (row.state === 'Send') {
            btnDelete = "<a class='btn btn-danger' href='http://" + window.location.host + "/referencia/confirmar/" + row.id + "'><i class='fa fa-trash'></i></a>";
          } else if (row.state === 'Forwarded' || row.state === 'finished') {
            btnDelete = "<a class='btn btn-primary' href='http://" + window.location.host + "/contrarreferencia/ver/" + row.id + "'><i class='fa fa-reply-all'></i></a>";
          } else {
            return '';
          }
          if (row.id != null) {
            return (
              "<div class='btn-group'><a class='btn btn-warning' href='http://" +
              window.location.host +
              "/referencia/editar/" +
              row.id +
              "'><i class='fa fa-edit'></i></a><a class='btn btn-info' href='http://" +
              window.location.host +
              "/referencia/ver/" +
              row.id +
              "'><i class='fa fa-eye'></i></a>" + btnDelete + "</div>"
            );
          } else {
            return "No posee id";
          }
        }
      },
      {
        data: null,
        defaultContent: '',
        orderable: false,
        searchable: false,
        class: "tdActions text-center",
        render: function(data, type, row, meta) {
          var btnAgainstReference = "";
          var btnDelete = "";
          if (row.state === 'Send') {
            btnDelete = "<a class='btn btn-success' href='http://" + window.location.host + "/contrarreferencia/nueva/" + row.id + "'><i class='fa fa-pencil'></i></i></a>";
          } else if (row.state === 'Forwarded' || row.state === 'finished') {
            btnDelete = "<a class='btn btn-danger' href='http://" + window.location.host + "/contrarreferencia/confirmar/" + row.id + "'><i class='fa fa-trash'></i></a>";
          } else {
            return '';
          }
          if (row.id != null) {
            if (row.state === 'Forwarded' || row.state === 'finished') {
              return (
                "<div class='btn-group'><a class='btn btn-warning' href='http://" +
                window.location.host +
                "/contrarreferencia/editar/" +
                row.id +
                "'><i class='fa fa-edit'></i></a>" + btnDelete + "</div>"
              );
            } else if (row.state === 'Send') {
              return (
                "<div class='btn-group'>" + btnDelete + "</div>"
              );
            }
          } else {
            return "No posee id";
          }
        }
      }
    ]
  });
  $("#tableReferenceGuest").DataTable({
    processing: true,
    serverSide: true,
    ajax: "/referenceGetData",
    language: tableLanguaje(),
    columns: [{
        data: "id",
        name: "id",
        class: "idTable",
        orderable: false,
        searchable: false
      },
      {
        data: "patient",
        name: "patient"
      },
      {
        data: "identificationCard",
        name: "identificationCard"
      },
      {
        data: "observations",
        name: "observations"
      },
      {
        data: "id",
        defaultContent: '',
        orderable: false,
        searchable: false,
        class: "tdActions text-center",
        render: function(data, type, row, meta) {
          var btnAgainstReference = "";
          var btnDelete = "";
          if (row.state === 'Send') {
            btnDelete = "<a class='btn btn-danger' href='http://" + window.location.host + "/referencia/confirmar/" + row.id + "'><i class='fa fa-trash'></i></a>";
          } else if (row.state === 'Forwarded' || row.state === 'finished') {
            btnDelete = "<a class='btn btn-primary' href='http://" + window.location.host + "/contrarreferencia/ver/" + row.id + "'><i class='fa fa-reply-all'></i></a>";
          } else {
            return '';
          }
          if (row.id != null) {
            return (
              "<div class='btn-group'><a class='btn btn-warning' href='http://" +
              window.location.host +
              "/referencia/editar/" +
              row.id +
              "'><i class='fa fa-edit'></i></a><a class='btn btn-info' href='http://" +
              window.location.host +
              "/referencia/ver/" +
              row.id +
              "'><i class='fa fa-eye'></i></a>" + btnDelete + "</div>"
            );
          } else {
            return "No posee id";
          }
        }
      }
    ]
  });
});

function tableLanguaje() {
  return {
    decimal: "",
    emptyTable: "No hay información",
    info: "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
    infoEmpty: "Mostrando 0 to 0 of 0 Entradas",
    infoFiltered: "(Filtrado de _MAX_ total entradas)",
    infoPostFix: "",
    thousands: ",",
    lengthMenu: "Mostrar _MENU_ Entradas",
    loadingRecords: "Cargando...",
    processing: "<i class='fa fa-spinner fa-spin fa-3x fa-fw'></i><span class='sr-only'>Loading...</span> ",
    search: "Buscar:",
    zeroRecords: "Sin resultados encontrados",
    paginate: {
      first: "Primero",
      last: "Ultimo",
      next: "Siguiente",
      previous: "Anterior"
    }
  };
}



/*Against Reference Scripts
/*This function adds a new row in the treatments session*/
function getModalValues() {
  try {
    var table = document.getElementById("againstReferenceTable");
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
    elimanetI.setAttribute("id", "btnRemove");
    btnRemove.setAttribute("style", "background-color: red;");
    btnRemove.type = "button";
    btnRemove.value = "Remove";
    /*Button conducto*/
    var inputConducto = document.createElement("input");
    inputConducto.setAttribute("class", "form-control table_input");
    inputConducto.setAttribute("name", "conduit[]");
    inputConducto.setAttribute("required", "true");
    /*/Button conducto*/
    /*Button medición*/
    var inputMedicion = document.createElement("input");
    inputMedicion.setAttribute("class", "form-control table_input");
    inputMedicion.setAttribute("name", "measuring[]");
    inputConducto.setAttribute("required", "true");
    /*/Button medición*/
    /*Button Referencia*/
    var inputReferencia = document.createElement("input");
    inputReferencia.setAttribute("class", "form-control table_input");
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


/*Against Reference Scripts
/*This function adds a new row in the treatments session*/
function addRowTableVideo() {
  try {
    var table = document.getElementById("tableVideo");
    var row = table.insertRow(table.rows.length);
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);
    var btnRemove = document.createElement("button");
    var btnShow = document.createElement("button");
    btnShow.setAttribute("onclick", "showVideo(this);");
    btnShow.setAttribute("class", "btn btnRemove");
    btnShow.setAttribute("type", "button");
    var elimanetDelete = document.createElement("i");
    var elimanetShow = document.createElement("i");
    btnRemove.setAttribute("onclick", "RemoveRowTableVideo(this);");
    btnRemove.setAttribute("class", "btn btnRemove");
    elimanetDelete.setAttribute("class", "fa fa-trash");
    elimanetDelete.setAttribute("name", "btnRemove");
    elimanetDelete.setAttribute("id", "btnRemove");
    elimanetShow.setAttribute("class", "fa fa-eye");
    elimanetShow.setAttribute("name", "btnRemove");
    elimanetShow.setAttribute("id", "btnRemove");
    btnRemove.setAttribute("style", "background-color: red;");
    btnRemove.type = "button";
    btnRemove.value = "Remove";
    /*Button conducto*/
    var inputUrl = document.createElement("input");
    inputUrl.setAttribute("class", "form-control table_input");
    inputUrl.setAttribute("name", "url[]");
    inputUrl.setAttribute("required", "true");
    btnRemove.appendChild(elimanetDelete);
    btnShow.appendChild(elimanetShow)
    cell0.appendChild(inputUrl);
    cell1.appendChild(btnRemove);
    cell2.appendChild(btnShow);

  } catch (error) {
    alert(error.message)
  }
};

/*This function delete rows of the video table*/
function RemoveRowTableVideo(row) {
  try {
    var row = row.parentNode.parentNode;
    if (confirm("Desea elimina esta fila")) {
      var table = document.getElementById("tableVideo");
      table.deleteRow(row.rowIndex);
    }
  } catch (error) {
    alert(error.message)
  }
}

/*This function delete rows of the video table*/
function showVideo(row) {
  try {


    var url = $(row).closest('tr').find("input")[0].value;

    var videoid = url.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);
    if (videoid != null) {
      $('#prevewModal').empty();
      url = videoid[1];


    } else {
      alert("Video inválido");
      return;
    }
    console.log(url);
    $('<iframe>', {
      src: 'https://www.youtube.com/embed/' + url,
      id: 'videoFrame',
      frameborder: 0,
      scrolling: 'no'
    }).appendTo('#prevewModal');
    $('#previewVideo').show();
  } catch (error) {
    alert(error.message)
  }
}
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
      var table = document.getElementById("againstReferenceTable");
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
function closeModal(id) {
  try {
    $(id).fadeOut();
    $(id).fadeOut("slow");
    $(id).fadeOut(7000);
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
/*Against Reference Scripts*/

window.onload = inpuFileIsEmpy;



Window.load = removeInitialFiles();
