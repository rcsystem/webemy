<!-- =============================================================================
// vista de registro de Edecanes y Empresas
//Creado por:
// rafael cruz aguilar rafael_cruz_aguilar@hotmail.com
// ============================================================================= -->
<?php require_once"header.php"; ?>

<div class="registro_juntar">

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
                <form action="index.php/registro/registro_edecan" method="POST">
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
                         <input type="submit" class="btn btn-block btn-default btn-reg" value="Crear una cuenta">
                     </div>
                    
                    </form>

                </div>
        </div>
</div>


</div>

</section>
</div>
<?php require_once"footer.php"; ?>