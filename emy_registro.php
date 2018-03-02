<?php

include_once"bd/cnx.php";

$id_registro = mysqli_real_escape_string($mysqli, $_POST["cliente"]);

if ($id_registro =="1") {
	# code...
$empresa = mysqli_real_escape_string($mysqli, $_POST["nombre-empresa"]);
$contacto = mysqli_real_escape_string($mysqli, $_POST["nombre-contacto"]);

$apellido = mysqli_real_escape_string($mysqli, $_POST["apellido"]);
$tel = mysqli_real_escape_string($mysqli, $_POST["tel"]);

$email = mysqli_real_escape_string($mysqli, $_POST["email"]);
$ciudad = mysqli_real_escape_string($mysqli, $_POST["ciudad"]);

$usuario = mysqli_real_escape_string($mysqli, $_POST["usuario"]);
$password = mysqli_real_escape_string($mysqli, $_POST["password"]);


$sql="INSERT INTO emy_clientes (nom_cliente, nom_contacto, ape_contacto, tel_cliente, email_cliente, ciudad_cliente, user_cliente, pass_cliente)
VALUES ('$empresa', '$contacto', '$apellido', '$tel', '$email', '$ciudad', '$usuario', '$password' ) ";

$result=mysqli_query($mysqli,$sql);

echo" exito cliente";


}else{

$edecan = mysqli_real_escape_string($mysqli, $_POST["nombre"]);

$apellido = mysqli_real_escape_string($mysqli, $_POST["apellido"]);
$tel = mysqli_real_escape_string($mysqli, $_POST["tel"]);

$email = mysqli_real_escape_string($mysqli, $_POST["email"]);
$ciudad = mysqli_real_escape_string($mysqli, $_POST["ciudad"]);

$usuario = mysqli_real_escape_string($mysqli, $_POST["usuario"]);
$password = mysqli_real_escape_string($mysqli, $_POST["password"]);


$sql="INSERT INTO emy_edecanes (nom_edecan, ape_edecan, tel_edecan, email_edecan, ciudad_edecan, user_edecan, pass_edecan)
                        VALUES ('$edecan', '$apellido', '$tel', '$email', '$ciudad', '$usuario', '$password' ) ";

$result=mysqli_query($mysqli,$sql);

if ($result != 0){
	
	 echo '<meta http-equiv="refresh" content="0;url=index.php">';
}else{

	echo "error";
}


// echo" 
// $edecan <br>
// $apellido <br>
// $tel <br>
// $email <br>
// $ciudad <br>
// $usuario <br>
// $password <br>
// exito Edecan";

}