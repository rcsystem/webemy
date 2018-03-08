<?php include_once "header.php"; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<style>
	.wrapper{
  width:100%;
  text-align:center;
}
h2{
  font-family:'Opan Sans', sans-serif;
  color:#555;
}
.carousel{
  width:90%;
  margin:0px auto;
}
.slick-slide{
  margin:10px;
}
.slick-slide img{
  width:100%;
}

.item-1:focus{
	outline:0px;

}
.item-2:focus{
	outline:0px;

}
.item-3:focus{
	outline:0px;

}
.item-4:focus{
	outline:0px;

}
.item-5:focus{
	outline:0px;

}

.equipo-item-1 {
  background: url('assets/images/equipo/vicente_1.png') no-repeat;
  height:308px;
  width: 308px;
}

.equipo-item-2 {
  background: url('assets/images/equipo/rafa_1.png') no-repeat;
  height:308px;
  width: 308px;
}
.equipo-item-3 {
  background: url('assets/images/equipo/karen_1.png') no-repeat;
  height:308px;
  width: 308px;
}
.equipo-item-4 {
  background: url('assets/images/equipo/alex_1.png') no-repeat;
  height:308px;
  width: 308px;
}
.equipo-item-5 {
  background: url('assets/images/equipo/vicente_1.png') no-repeat;
  height:308px;
  width: 308px;
}



.equipo-item-1:hover {
  background: url(assets/images/equipo/vicente_2.png) no-repeat;
  height: 308px;
  width: 308px;
  transition: all 0.5s ease;
}
.equipo-item-2:hover {
  background: url(assets/images/equipo/rafa_2.png) no-repeat;
  height: 308px;
  width: 308px;
  transition: all 0.5s ease;
}
.equipo-item-3:hover {
  background: url(assets/images/equipo/karen_2.png) no-repeat;
  height: 308px;
  width: 308px;
  transition: all 0.5s ease;
}
.equipo-item-4:hover {
  background: url(assets/images/equipo/alex_2.png) no-repeat;
  height: 308px;
  width: 308px;
  transition: all 0.5s ease;
}
.equipo-item-5:hover {
  background: url(assets/images/equipo/vicente_2.png) no-repeat;
  height: 308px;
  width: 308px;
  transition: all 0.5s ease;
}

</style>
<div class="img-equipo">
		<img src="assets/images/nosotros/nosotros_equipo.png" alt="">
	</div>

<div class="registro_juntar">

<section>

	<div class="clo-lg-12">
	<div class="info-equipo">
		
		<div class="home-titulos info-equipo-item">
			<h2>Conoce a nuestro equipo.</h2>
			<p>Nuestro equipo está compuesto por individuos altamente creativos e ingeniosos. 
			Por ello, deseamos atraer personas que tengan capacidad para desarrollar y mejorar nuestro negocio.  Deseamos crear un ambiente en donde lo mas importante sea el desarrollo del individuo. </p>
		</div>

	</div>

	
</div>

<div class="clo-lg-12">
	<div class="slider-equipo">
		<div class="wrapper">
  
<div class="carousel">
	<div class="item-1">
  <div id="equipo-item-1" class="equipo-item-1">
  	
  </div>
  <p>Desarrollador</p>
  </div>
  <div class="item-2">
    <div id="equipo-item-2" class="equipo-item-2"></div>
    <p>Desarrollador</p>
</div>

 <div class="item-3">
    <div id="equipo-item-3" class="equipo-item-3"></div>
    <p>Ventas</p>
</div>

 <div class="item-4">
    <div id="equipo-item-4" class="equipo-item-4"></div>
    <p>Becario</p>
</div>

 <div class="item-5">
    <div id="equipo-item-5" class="equipo-item-5"></div>
    <p>Diseño</p>
</div>

</div>
</div>

	</div>


</div>




</section>


</div>



<?php include_once "footer.php"; ?>
<!-- Custom Login -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
	$(document).ready(function(){
  $('.carousel').slick({
  slidesToShow: 3,
  dots:true,
  centerMode: true,
  responsive: [{

      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        infinite: true
      }

    }, {

      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        dots: true
      }

    }, {

      breakpoint: 300,
      settings: "unslick" // destroys slick

    }]
  });
});
</script>

