var offset = 0;
var stateLoad = false;
var hasPost = false;
var loadInicial = false;
//Load the post from db
function loadPost() {
  try {
    openSpinner();
    $.ajax({
      url: "getPosts",
      data: {
        "offset": offset
      },
      type: "GET",
      success: function(listOfPost) {
        if (listOfPost.length > 0 && !hasPost) {
          renderPost(listOfPost);
          offset += 5;
        } else {
          closeSpinner();
          hasPost = false;
          addMessage("No hay más noticias");
        }
      },
      error: function(error) {
        addMessage(error);
      }
    });
  } catch (e) {
    alert(e.message);
  }
}

function getMediaForId(id) {
  try {
    $.ajax({
      url: "getMediaForId",
      data: {
        "id": id
      },
      type: "GET",
      success: function(listOfMedia) {
        renderMedia(listOfMedia);
      },
      error: function(error) {
        console.log(error.responseJSON.message);
      }
    });
  } catch (e) {
    alert(e.message);
  }
}
//Create the post contens
function renderPost(listOfPost) {
  var container = '';
  var more = '';
  var form = '';
  listOfPost.forEach(function(element) {
    container = contaierPost(element.id);
    if (element.type == 'Video') {
      container.append(createVideo(element.miniature, ''));
    } else {
      container.append(createImg(element.miniature));
    }
    container.append(createBtnTotal(element.id, element.more));
    $('#rowPost').append(container);
    $('#rowPost').append(createFooterPost(element.details));
    $('#rowPost').append(createActionsPost(element.date));
    closeSpinner();
    if (!loadInicial) {
      $(this).scrollTop(0);
      loadInicial = true;
    }
    stateLoad = true;
  });
}

function contaierPost(id) {
  return $('<div/>', {
    class: 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center animated animated fadeInLeft postBody',
    onclick: 'getPostImage(' + id + ')'
  })

}

function createVideo(src, active) {
  var ctnVd = $('<div>', {
    class: 'embed-responsive embed-responsive-16by9',
    id: '#containerVideo'
  });
  var video = $('<iframe>', {
    class: 'embed-responsive-item moreImage',
    src: 'https://www.youtube.com/embed/' + src,
    frameborder: 0,
    scrolling: 'no'
  });
  return ctnVd.append(video);
}


function createImg(src) {
  return $('<img>', {
    class: 'img-fluid moreImage',
    id: 'fadeInImage',
    alt: 'Responsive-image',
    src: 'storage/' + src
  });
}

function createFooterPost(details) {
  var containerDetails = $('<div>', {
    class: 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 animated animated fadeInLeft',
    id: 'details-footer'
  });
  containerDetails.append(readMore(details));
  return containerDetails.append(createHr());
}

function createActionsPost(date) {
  var container = $('<div>', {
    class: 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 animated animated fadeInLeft',
    id: 'postFooter'
  });
  var row = $('<div>', {
    class: 'row'
  });
  var firstCol = $('<div>', {
    class: 'col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6',
    text: date,
    id: 'post-date'
  });
  var secondCol = $('<div>', {
    class: 'col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6',
    text: 'compartir con: ',
    id: 'buttoms-share'
  });
  secondCol.append(facebookButtom(date));
  secondCol.append(TwitterkButtom(date));
  row.append(firstCol);
  row.append(secondCol);
  return container.append(row);
}

function facebookButtom(id) {
  var aFacebook = $('<a>', {
    class: '',
    href: 'facebook/' + id
  });
  var iFacebook = $('<i>', {
    class: 'fa fa-facebook'
  });
  return aFacebook.append(iFacebook);
}

function TwitterkButtom(id) {
  var aTwitter = $('<a>', {
    class: '',
    href: 'facebook/' + id
  });
  var iTwitter = $('<i>', {
    class: 'fa fa-twitter'
  });
  return aTwitter.append(iTwitter);
}

function createHr() {
  return $('<hr>', {
    class: 'PostDivider'
  });
}

function createBtnTotal(id, more) {
  return $('<label>', {
    class: 'test',
    onclick: 'getPostImage(' + id + ')',
    text: '1/' + more
  });
}

function createIframeCorousel(src, arctive) {
  var container = $('<div>', {
    class: 'carousel-item' + active + 'text-center'
  });
  return createImg(src).append(container);

}

function renderMedia(listOfMedia) {
  listOfMedia.forEach(function(element) {
    var form = '';
    var active = '';
    if (listOfMedia.length <= 1) {
      $('#carouselPrev').fadeOut();
      $('#carouselNext').fadeOut();
    } else {
      $('#carouselPrev').fadeIn();
      $('#carouselNext').fadeIn();
    }
    if (element.type == "Image") {
      active = ckeckCarrousel(listOfMedia[0].id, element.id);
      form = '<div class="carousel-item ' + active + ' text-center"><img class="img-fluid" ' +
        'src="storage/' + element.src + '" alt="Responsive-image"></div>';
    } else if (element.type == "Video") {
      active = ckeckCarrousel(listOfMedia[0].id, element.id);
      form = '<div class="carousel-item ' + active + ' text-center"><div class="embed-responsive ' +
        'embed-responsive-16by9"><iframe class="embed-responsive-item moreImage"src=' +
        '"https://www.youtube.com/embed/' + element.src + '" allowfullscreen></iframe></div></div>';
    }
    $("#listMedia").append(form);
  });
}

function ckeckCarrousel(arrayId, elementId) {
  if (arrayId == elementId) {
    $("#listMedia").empty();
    return 'active';
  } else {
    return '';
  }
}

function readMore(text) {
  var element = $('<p>', {
    class: 'detailsPost',
    text: text
  });
  if (text.length > 50) {
    var more = $('<span>', {
      class: 'controlsPost',
      text: '..más',
      onclick: 'showMore(this)'
    });
    var less = $('<span>', {
      class: 'controlsPost hide',
      text: '..menos',
      onclick: 'showLess(this)'
    });
    var preview = $('<span>', {
      class: 'prev',
      text: text.slice(0, 80)
    });
    var next = $('<span>', {
      class: 'next hide',
      text: text.slice(80)
    });
    element.append(preview);
    element.append(more);
    element.append(next);
    element.append(less);
    return element;
  } else {
    return $('<p>', {
      class: 'text-left',
      text: text
    });
  }
}

//Ckeck the scroll position
$(window).on("scroll", function() {
  var scrollTop = $(window).scrollTop();
  if ((window.innerHeight + window.scrollY >= document.body.offsetHeight - 200)) {
    if (stateLoad) {
      stateLoad = false;
      loadPost();
      console.log("carga");
    }
  }
});
//Clse spinner animation
function closeSpinner() {
  setTimeout(function() {
    $('#loading').fadeOut();
  }, 2000);
}

//OpenSpinner animation
function openSpinner() {
  $('#loading').fadeIn();
}

//Create Message when input is empy
function addMessage(msj) {
  $('#postMessage').append('<p class="animated animated fadeInLeft text-center">' + msj + '</p>');
}

function getPostImage(id) {
  $("#listMedia").empty();
  $("#listMedia").append('<img class="img-fluid" src="/img/loading.gif" alt="Responsive-image"></img>');
  getMediaForId(id);
  $("#modalGallery").modal("show");
}

function showMore(lbl) {
  var content = lbl;
  $(lbl).fadeOut(300);
  $(lbl).next().next().fadeIn(300);
  $(lbl).next().fadeIn(300);
}

function shareFacebok(post) {
  console.log("chick");
}

function showLess(lbl) {
  $(lbl).prev().prev().fadeIn(300);
  $(lbl).prev().fadeOut(300);
  $(lbl).fadeOut(300);
}
$(document).ready(function() {
  loadPost();
});

$(".shareFacebok").click(function() {
  alert("hola");
});
