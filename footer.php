
<hr>
		<footer>

		<div id="info-empresa" class="home-footer contenedor row">
			<div class="col-lg-4">
				<div class="home-social"></div>
				 <h5 class="text-aqua">Horarios </h5>

		            <p>Lunes a Domingo 9:00 am a 6:00pm</p>
		            <p>Llámanos +55 24 60 23 84</p>
					<div class="formulario"><a href="#" class="btn btn-contactos"><i class="icon-android-create"></i> Escríbenos</a></div>
						<br>
		            <ul class="footer_social">
		                <li class="facebook"><a href="https://es-la.facebook.com/emy.edecanes/" target="_black"><i class="icon-facebook"> </i> </a></li>
		                <li class="twitter"><a href="#"><i class="icon-twitter"> </i> </a></li>
		                <li class="instagram"><a href="https://www.instagram.com/emy_agencia/" target="_black"><i class="icon-instagram"> </i> </a></li>
		                <li class="youtube"><a href="#"><i class="icon-youtube-play"> </i> </a></li>
		                <li class="pinterest"><a href="#"><i class="icon-pinterest-p"> </i> </a></li>
		                <li class="googleplus"><a href="#"><i class="icon-google-plus"> </i> </a></li>
		            </ul>
			</div>
			<div class="col-lg-8">
				<div class="home-mapa">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240500.48886882412!2d-99.25281187283981!3d19.634985799458992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f502ad42d65f%3A0xf00b53299f3121b4!2sEMY+EDECANES+Y+MODELOS%2C+S.A.+DE+C.V.!5e0!3m2!1ses-419!2smx!4v1519230357003"
						 frameborder="0" style="border:0" allowfullscreen></iframe>		
			</div>
			</div>

			<hr>
			
			<div class="col-lg-12 text-center">
				<p> <b> © 2018 EMY Agencia. </b></p>
			</div>
			
		</footer>


	</div> <!--div driper -->
</div> <!--cierre del div main-->


	<!-- Link para los SCRIPTS  -->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="assets/plugins/modernizr.js"></script>

<!-- Isotope javascript -->
<script type="text/javascript" src="assets/plugins/isotope/isotope.pkgd.min.js"></script>

<!-- Backstretch javascript -->
<script type="text/javascript" src="assets/plugins/jquery.backstretch.min.js"></script>

<!-- Appear javascript -->
<script type="text/javascript" src="assets/plugins/jquery.appear.js"></script>

<!-- Initialization of Plugins -->
<script type="text/javascript" src="assets/js/template.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="assets/js/custom.js"></script>

<!-- Custom Registro -->
<script type="text/javascript" src="assets/js/form-registro.js"></script>

<!-- Custom Login -->
<script type="text/javascript" src="assets/js/login.js"></script>

<!-- Custom Login -->
<script type="text/javascript" src="assets/js/registro.js"></script>

<!-- Menu Toggle Script 
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").removeClass("toggled");
		
    });
    </script>-->
<script>
  
  $("#menu-toggle").click( function() {
    var clase = $("#wrapper").attr("class");
    if(clase == "toggled") {
     
      $("#wrapper").attr("class","");
       
    } else {
      
      $("#wrapper").attr("class","toggled");
  }
       
  });
  

</script>	  

	<!-- Scripts para el scroll -->
<script type="text/javascript">
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
</script>

<script>
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
</script>
<script>
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
</script>
</body>
</html>