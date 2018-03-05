<!-- =============================================================================
// vista de registro de Edecanes y Empresas
//Creado por:
// rafael cruz aguilar rafael_cruz_aguilar@hotmail.com
// ============================================================================= -->

<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
    header("Location:.php");
}
require_once 'ConexionBD/dbconnect.php';
$msg =""; 

    if(isset($_POST['btn-registro_1'])) {
        $msg ="";
        $nombre = $_POST["nombre_edecan"];
        $apellido = $_POST["ape_edecan"];
        $correo = $_POST["email_edecan"];
        $password = $_POST["pass_edecan"];
        $telefono = $_POST["tel_edecan"];
        $celular = $_POST["movil_edecan"];
        $direccion = $_POST["dir_edecan"];
        $genero = $_POST["genero_edecan"];
        $contrasena_incriptada = password_hash($password, PASSWORD_DEFAULT);

    $sql1 = $DBcon->query("SELECT ede_email FROM emy_edecanes WHERE ede_email='$correo'");
    $count=$sql1->num_rows;
    
    if ($count==0) {
        
$query = "INSERT INTO emy_edecanes(ede_nombre, ede_apellido, ede_email, ede_password, ede_tel, ede_movil, ede_dir, ede_genero) VALUES('$nombre', '$apellido', '$correo', '$contrasena_incriptada','$telefono','$celular','$direccion','$genero')";


        if ($DBcon->query($query)) {
            $msg = "<div class='alert alert-success'>
                        <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Registro Exitoso!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
                    </div>";
        }else {
            $msg = "<div class='alert alert-danger'>
            
                        <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error fatal 'No se puedo registrar'!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
                    </div>";
        }
        
    } else {
        
        
        $msg = "<div class='alert alert-danger'>
        
                    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Lo lamento correo ya en uso!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
                </div>";
            
    }
    
    $DBcon->close();
}


if(isset($_POST['btn-registro_2'])) {
    $nom_empresa = $_POST["nom_empresa"];
    $nom_completo = $_POST["nom_completo"];
    $giro = $_POST["giro"];
    $sucursal = $_POST["sucursal"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $ext = $_POST["ext"];
    $celular = $_POST["celular"];
    $estatus = $_POST["estatus"];
    $estado = $_POST["estado"];
    $password = $_POST["password"];
    $contrasena_incriptada = password_hash($password, PASSWORD_DEFAULT);

$sql1 = $DBcon->query("SELECT email_emp FROM emy_empresas WHERE email_emp='$correo'");
$count=$sql1->num_rows;

if ($count==0) {
    
$query = "INSERT INTO emy_empresas(nombre_emp, nombre_contacto, dir_emp, email_emp, password_emp, tel_local, tel_ext, tel_movil, estado_emp, sucursal_emp, status_emp, giro_emp) 
VALUES('$nom_empresa', '$nom_completo','$direccion','$correo','$contrasena_incriptada','$telefono','$ext','$celular','$estado','$sucursal',$estatus, '$giro')";


    if ($DBcon->query($query)) {
        $msg = "<div class='alert alert-success'>
                    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Registro Exitoso!
                </div>";
    }else {
        $msg = "<div class='alert alert-danger'>
                    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error fatal 'No se puedo registrar'!
                </div>";
    }
    
} else {
    
    
    $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Lo lamento correo ya en uso!
            </div>";
        
}

$DBcon->close();
}


?>

<?php require_once"header.php"; ?>

<div class="registro_juntar">

<?php require_once"header.php"; ?>
<section>

<div class="content-reg">
<div class="col-lg-12">
        <div class="titulo-registro">
        <center> <h1>Registra tu cuenta</h1> </center>
        </div>

        <div class="row">
                <div class="col-lg-6">
                      <center>   <img src="assets/images/trabajoedecan.png" alt=""> </center>
                </div>


                <div class="col-lg-6">
                <!-- /////////////////////////////////////////Inicio Menu usuarios////////////////////////////////////////////////////////////// -->
                <form action="registro.php" method="POST" utf-8 id="usuarios" style="display: block">
                <div class="col-lg-12">
                <div class="form-group">
                <?php echo $msg; ?>
                <label for="tipo_cuenta">Selecciona tu tipo de cuenta</label>
                    <select name="tipo_cuenta" id="tipo_cuenta" class="form-control" onChange="mostrar(this.value);">
                    <option value="0">Selecionar</option>
                    <option value="1">
                    Edecan
                    </option>
                    <option value="2">
                    Cliente
                    </option>
                    </select>
                    </div>
                </div>

                    

                    <div class="col-lg-12">
                    <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                            <input type="text" class="form-control" name="nombre_edecan" id="nombre_edecan" placeholder="Nombre (s)"/>
                            </div>
                            </div>
                            
                            <div class="col-lg-6">
                            <div class="form-group">
                            <input type="text" class="form-control" name="ape_edecan" id="ape_edecan" placeholder="Apellido"/>
                            </div>
                            </div>

                        </div>

                    </div>

                   
                   
                    <div class="col-lg-12">

                   
                    <div class="form-group">
                    <input type="email" class="form-control" name="email_edecan" id="email_edecan" placeholder="E-mail"/>
                    </div>
                    
                   
                    <div class="form-group">
                    <input type="password" class="form-control" name="pass_edecan" id="pass_edecan" placeholder="Password"/>
                    </div>
                   
                    <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group">
                        <input type="number" class="form-control" name="tel_edecan" id="tel_edecan" placeholder="Teléfono"/>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                        <input type="number" class="form-control" name="movil_edecan" id="movil_edecan" placeholder="Movil"/>
                        </div>
                    </div>
                    </div>
                   

                    

                    <div class="form-group">
                    <input type="text" class="form-control" name="dir_edecan" id="dir_edecan" placeholder="Dirección"/>
                    </div>

                     <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="genero_edecan" value="1"> Mujer
                            </label>

                        <label class="radio-inline">
                            <input type="radio" name="genero_edecan" value="2"> Hombre
                        </label>
                    </div>

         </div>

                  

                     <div class="btn-registro">
                         <input type="submit" class="btn btn-block btn-default btn-reg" value="Crear una cuenta" name="btn-registro_1">
                     </div>
            </form>
<!-- /////////////////////////////////////////Final Inicio Menu usuarios////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////Menu Empresass////////////////////////////////////////////////////////////// -->
<form action="registro.php" method="POST" utf-8 id="empresas" style="display: none">
                <div class="col-lg-12">
                    <div class="form-group">
                    <?php echo $msg; ?>
                    <label for="tipo_cuenta">Selecciona tu tipo de cuenta</label>
                        <select name="tipo_cuenta" id="tipo_cuenta" class="form-control" onChange="mostrar(this.value);">
                            <option value="0">Selecionar</option>
                            <option value="1">Edecan</option>
                            <option value="2">Cliente</option>
                    </select>
                    </div>
                </div>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="nom_empresa" id="tel_edecan" placeholder="Nombre de la Empresa"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="textr" class="form-control" name="nom_completo" id="tel_edecan" placeholder="Nombre del contacto Completo"/>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="giro" id="tel_edecan" placeholder="Giro"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="sucursal" id="tel_edecan" placeholder="Sucursal"/>
                </div>
            </div>
        </div>
    </div>

     <div class="col-lg-12">    
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="direccion" id="tel_edecan" placeholder="Dirección"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="email" class="form-control" name="correo" id="tel_edecan" placeholder="Correo"/>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-5">
                <div class="form-group">
                    <input type="number" class="form-control" name="telefono" id="tel_edecan" placeholder="Telefono"/>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="number" class="form-control" name="ext" id="tel_edecan" placeholder="Ext"/>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <input type="number" class="form-control" name="celular" id="tel_edecan" placeholder="Celular"/>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="estatus" id="tel_edecan" placeholder="Estatus"/>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="estado" id="tel_edecan" placeholder="Estado"/>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="tel_edecan" placeholder="Password"/>
                </div>
            </div>
        </div>
    </div>
        <div class="btn-registro">
            <input type="submit" class="btn btn-block btn-default btn-reg" value="Crear una cuenta" name="btn-registro_2">
        </div>        

</form>
<!-- /////////////////////////////////////////Menu usuarios////////////////////////////////////////////////////////////// -->

                </div>
        </div>
</div>


</div>

</section>

<div class="spacer__sm"></div>
