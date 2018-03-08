<?php
require_once 'ConexionBD/dbconnect.php';
session_start();
$msg="";
if (isset($_SESSION['userSession'])!="") {
	header("Location:index.php");
	exit;
}

if (isset($_POST['btn-login'])) {

	$correo = strip_tags($_POST['correo']);
	$password = strip_tags($_POST['password']);
	
	$email = $DBcon->real_escape_string($correo);
	$password = $DBcon->real_escape_string($password);
	
	$query = $DBcon->query("SELECT id_edecan, ede_email, ede_password FROM emy_edecanes WHERE ede_email='$email'");
	$row=$query->fetch_array();
	
	$count = $query->num_rows; //
	
	if (password_verify($password, $row['ede_password']) && $count==1) {
		$_SESSION['userSession'] = $row['id_edecan'];
		header("Location: inicio_edecanes.php");
	} else {//Mensaje de errror//
		
		$query = $DBcon->query("SELECT id_empresa, email_emp, password_emp FROM emy_empresas WHERE email_emp='$email'");
		$row=$query->fetch_array();
		
		$count = $query->num_rows; //
		
		if (password_verify($password, $row['password_emp']) && $count==1) {
			$_SESSION['userSession'] = $row['id_empresa'];
			header("Location: inicio_empresa.php");
		} else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error!
					</div>";
		}
	}
	$DBcon->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<meta http-equiv=”Cache-Control” content=”no-cache, mustrevalidate”>-->


 		<meta name="description" content="Brindamos un servicio de clase mundial, con soluciones integrales en publicidad y promoción para todo tipo de eventos sociales, culturales y de negocios, a cualquier magnitud, con el uso de los más avanzados servicios de comunicación; logrando con ello la total satisfacción de nuestros clientes.">
		<meta name="keywords" content="EMY, Edecanes, Modelos, Agencia de Modelos México, Agencia, Modelaje">

		<!--Metas para Compartir en Facebook -->
		<meta property="og:title" content="EMY Modelos y Edecanes S.A. de C.V."/>
		<meta property="og:description" content="Brindamos un servicio de clase mundial, con soluciones integrales en publicidad y promoción para todo tipo de eventos sociales, culturales y de negocios, a cualquier magnitud, con el uso de los más avanzados servicios de comunicación; logrando con ello la total satisfacción de nuestros clientes."/>
		<meta property="og:image" content="http://emy.mx/assets/images/logo_emy.jpg"/>


		<!--Metas para compartir en Twitter-->
		<meta name="twitter:card" content="Emy Modelos y Edecanes S.A. de C.V."/>
		<meta name="twitter:site" content="@emy.edecanes"/>
		<meta name="twitter:title" content="EMY Modelos y Edecanes"/>
		<meta name="twitter:description" content="Brindamos un servicio de clase mundial, con soluciones integrales en publicidad y promoción para todo tipo de eventos sociales, culturales y de negocios, a cualquier magnitud, con el uso de los más avanzados servicios de comunicación; logrando con ello la total satisfacción de nuestros clientes."/>
		<meta name="twitter:image" content="http://emy.mx/assets/images/logo_emy.jpg"/>

<!-- Link para los estilos CCS -->
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<link href="https://file.myfontastic.com/2SQuVNdrs635VjAgGpanbP/icons.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/styles.css">
		<!-- Plugins -->
		<link href="assets/css/animations.css" rel="stylesheet">
<!-- Custom css --> 
		<link href="assets/css/custom.css" rel="stylesheet">
	<title>EMY EDECANES Y MODELOS, S.A. DE C.V.</title>
</head>
<body>
<div class="main">

    
	<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrolltop"><i class="icon-up-open-big"></i></div>

        <div class="home-menu col-lg-12" >
	

			<div class="row">
					<div class="col-lg-2 boton-menu">
                    <!-- /#sidebar-wrapper -->
                    <div class="boton-menu-item">
					<a href="#menu-toggle"  id="menu-toggle"><i class="icon-align-justify"> </i> </a>
					</div>
					<div class="home-logo">
					<a href="index.php">
						<img src="assets/images/logo-v.png" class="" alt="">
						</a>
						</div>
					</div>

					<div class="col-lg-4" >
							
					</div>

					<div class="home-contacto col-lg-5 col-xs-12" >

					<!--Formulario de registro-->
						<div class="form-contacto">
		               <form class=" " action="" method="POST">
						    <div class="form-row">
							<div class="form-group col-xs-12 col-lg-4">
							<input type="text" class="contorno" placeholder="E-mail" name="correo">
							</div>
							<div class="form-group col-xs-12 col-lg-4">
							<input type="password" class="contorno" placeholder="Password" name="password">
							</div>
							<div class="form-group col-xs-12 col-lg-4">
							<input type="submit" class="btn btn-sesion" value="Entrar" name="btn-login" >
							</div>
						</div>
					   </form>    
					   </div> 
                    </div>


                    <div class="col-lg-1">
                    	<div class="home-enter">
							<div class="home-inicio">
							  <a href="registro.php" >Registrate</a>
							</div>
						</div>
					</div>

<!-- *****************************CIERRE de DIV´s  ***************************************************** -->

    		
		</div>
</div>

<!-- *****************************CIERRE de DIV´s ***************************************************** -->

<div id="wrapper" class="toggled">

          <!-- Sidebar -->
        <div id="sidebar-wrapper" >
            <ul class="sidebar-nav">
				<li class="sidebar-brand">
								
				</li>
                <li>
				<a href="index.php">Inicio</a>
				</li>
                <li>
				<a href="somos.php">Quiénes Somos</a>
                </li>
                <li>
				<a  data-toggle="collapse" href="#colla-2" role="button" aria-expanded="false" aria-controls="collapseExample">Edecanes <i class="icon-angle-down" style="font-size:12px;"></i></a>
				<ul class="collapse list-unstyled" id="colla-2">
					<li><a href="edecan_a.php">A</a></li>
            		<li><a href="edecan_aa.php">AA</a></li>
					<li><a href="edecan_aaa.php">AAA</a></li>
				</ul>
				</li>
                <li>
				<a  data-toggle="collapse" href="#colla-3" role="button" aria-expanded="false" aria-controls="collapseExample">Animadores <i class="icon-angle-down" style="font-size:12px;"></i></a>
				<ul class="collapse list-unstyled" id="colla-3">
					<li><a href="mantenimiento.php">Mujer</a></li>
            		<li><a href="mantenimiento.php">Hombre</a></li>
				</ul>
                </li>
                <li>
				<a  data-toggle="collapse" href="#colla-4" role="button" aria-expanded="false" aria-controls="collapseExample">Modelos <i class="icon-angle-down" style="font-size:12px;"></i></a>
				<ul class="collapse list-unstyled" id="colla-4">
					<li><a href="mantenimiento.php">Fotografia fija</a></li>
            		<li><a href="mantenimiento.php">Pasarela</a></li>
				</ul>
                </li>
                <li>
                    <a href="mantenimiento.php">Únete a nosostros</a>
                </li>
               
			    <li>
                    <a href="contacto.php">Contacto</a>
                </li>
				<li><?php echo $msg;?></li>
            </ul>
        </div>
