<?php 

require_once"cnx.php";

$selector = mysqli_real_escape_string($mysqli, $_POST["selector"]);

if ($selector== 1) {
	
	$cliente =  mysqli_real_escape_string($mysqli, $_POST["user"]);

	$password =  mysqli_real_escape_string($mysqli, $_POST["password"]);

	$consulta = "SELECT user_cliente , pass_cliente FROM emy_clientes WHERE user_cliente ='$cliente' AND pass_cliente ='$password'";

    $compara = mysqli_query($mysqli,$consulta);


}