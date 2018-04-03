var limit = 0;
var scroll = 0;
var noPosts = false;
$(document).ready(function() {
  $("#loading").fadeIn();
  var route = "/posts";
  $.ajax({
    url: route,
    data: {
      limit: limit
    },
    type: "GET",
    dataType: "json",
    success: function(data) {
      console.log("limit" + limit);
      if (data.length === 0) {
        noPosts = true;
        addMessage("No hay más datos");
      } else {
        $(data).each(function(key, value) {
          limit++;
          createPost(
            value.more,
            value.id,
            value.image,
            value.name,
            value.surnames,
            value.miniature,
            value.details
          );
        });
      }
    },
    error: function(data) {
      addMessage(data);
    }
  });
  closeSpinner();
});
$(window).on("scroll", function() {
  styleHeader();
  console.log(noPosts);
  if ((
    window.innerHeight + window.scrollY >=
    document.body.offsetHeight - 1000) && (!noPosts)) {
    if (noPosts === false) {
      $("#loading").fadeIn();
      var route = "/posts";
      console.log("limit" + limit);
      $.ajax({
        url: route,
        data: {
          limit: limit
        },
        type: "GET",
        dataType: "json",
        success: function(data) {
          if (data.length === 0) {
            noPosts = true;
            addMessage("No hay más datos");
          } else {
            $(data).each(function(key, value) {
              limit++;
              createPost(
                value.more,
                value.id,
                value.image,
                value.name,
                value.surnames,
                value.miniature,
                value.details
              );
            });
          }
        },
        error: function(data) {
          addMessage(data);
        }
      });
      scroll = window.scrollY;
      closeSpinner();
    }
  }
});
function loadImages(id) {
  $("#previewImage").empty();
  $("#modalPreview").modal("show");
  var route = "/imagenes";
  $.ajax({
    url: route,
    data: {
      id: id
    },
    type: "GET",
    dataType: "json",
    success: function(data) {
      $(data).each(function(key, value) {
        if (value.type === "I") {
          var newMedia = $(
            '<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><img src="storage/' +
              value.src +
              '" class="img-fluid"  alt="Responsive-image"></div>'
          );
          newMedia.appendTo("#previewImage");
        } else if (value.type === "V") {
          var newMedia = $(
            '<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="' +
              value.src +
              '" allowfullscreen></iframe></div></div>'
          );
          newMedia.appendTo("#previewImage");
        }
      });
    }
  });
}

function closeSpinner() {
  setTimeout(function() {
    $("#loading").fadeOut();
  }, 2000);
}

function createPost(more, id, image, name, surnames, miniature, details) {
  var button;
  if (parseInt(more) > 1) {
    button =
      '<button  onclick="loadImages(' +
      id +
      ')" class="btn btn-more">1/' +
      more +
      "</button>";
  } else {
    button = "";
  }
  var newPost = $(
    '<div class="row" id="row-post"><div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><div class="container"><div class="row"><div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"><img src="storage/' +
      image +
      '" class="img-fluid" alt="Responsive-image"></div><div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"><h5>' +
      name +
      " " +
      surnames +
      '</h5></div></div></div></div><div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><div class="body-post text-center">' +
      button +
      '<img src="storage/' +
      miniature +
      '" class="img-fluid" alt="Responsive-image"></div></div><div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><p>' +
      details +
      "</p></div></div>"
  );
  newPost.appendTo("#newPost").show("slow");
}

function addMessage(message) {
  $("#message").empty();
  $("#message").append(
    '<p id="footer-mesagge text-center">' + message + "</p>"
  );
}
function styleHeader(){
$('.navbar').css("padding", "0px");
}
