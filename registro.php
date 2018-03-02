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
if(isset($_POST['btn-registro'])) {
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
        
$query = "INSERT INTO emy_edecanes(ede_nombre, ede_apellido, ede_email, ede_password, ede_tel, ede_movil, ede_dir, ede_genero) VALUES('$nombre', '$apellido', '$correo', '$contrasena_incriptad','$telefono','$celular','$direccion','$genero')";


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
                <form action="registro.php" method="POST" utf-8>
                <div class="col-lg-12">
                <div class="form-group">
                <label for="tipo_cuenta">Selecciona tu tipo de cuenta</label>
                    <select name="tipo_cuenta" id="tipo_cuenta" class="form-control">
                    <option value="#">Selecionar</option>
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
                    <input type="text" class="form-control" name="email_edecan" id="email_edecan" placeholder="E-mail"/>
                    </div>
                    
                   
                    <div class="form-group">
                    <input type="text" class="form-control" name="pass_edecan" id="pass_edecan" placeholder="Password"/>
                    </div>
                   
                    <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group">
                        <input type="text" class="form-control" name="tel_edecan" id="tel_edecan" placeholder="Teléfono"/>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                        <input type="text" class="form-control" name="movil_edecan" id="movil_edecan" placeholder="Movil"/>
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
                         <input type="submit" class="btn btn-block btn-default btn-reg" value="Crear una cuenta" name="btn-registro">
                         <?php echo $msg; ?>
                     </div>
                    
                    </form>

                </div>
        </div>
</div>


</div>

</section>

<?php require_once"footer.php"; ?>