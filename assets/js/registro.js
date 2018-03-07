
 //cambiar menu responsive 

  $(window).resize(function() {
  if ($('html').width() <= 1160) {

      $( "#wrapper" ).removeClass( "toggled" );

  }
});

  $("#menu-toggle").click( function() {
    var clase = $("#wrapper").attr("class");
    if(clase == "toggled") {
     
      $("#wrapper").attr("class","");
       
    } else {
      
      $("#wrapper").attr("class","toggled");
  }
       
  });
  

    

    // <!-- Scripts para el scroll -->

$(window).scroll(function(){
    if ($(this).scrollTop() > 100)
        $('.scrolltop').fadeIn();
    else
        $('.scrolltop').fadeOut();
});

$(document).ready(function(){
    $('.scrolltop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
})


//Carrusel para fotos de eventos

    $("#myCarousel").on("slide.bs.carousel", function(e) {
  var $e = $(e.relatedTarget);
  var idx = $e.index();
  var itemsPerSlide = 3;
  var totalItems = $(".carousel-item").length;

  if (idx >= totalItems - (itemsPerSlide - 1)) {
    var it = itemsPerSlide - (totalItems - idx);
    for (var i = 0; i < it; i++) {
      // append slides to end
      if (e.direction == "left") {
        $(".carousel-item")
          .eq(i)
          .appendTo(".carousel-inner");
      } else {
        $(".carousel-item")
          .eq(0)
          .appendTo(".carousel-inner");
      }
    }
  }
});

//menu para registro de formulario 

 function mostrar(id) {
            if (id == "1") {
                $("#usuarios").show();
                $("#empresas").hide();
                }

            if (id == "2") {
                $("#usuarios").hide();
                $("#empresas").show();
               }
        }

        