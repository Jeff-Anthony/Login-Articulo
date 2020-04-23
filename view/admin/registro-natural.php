
<?php include("db.php"); ?>

<?php include("componentes/encabezado.php"); ?>


   <?php if(isset($_SESSION['message'])){ ?>
    
   <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
  		<?= $_SESSION['message'] ?>
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		  <span aria-hidden="true">&times;</span>
		</button>
	</div>

   <?php } ?>
	

      <form  action="save-natural.php" method="POST" id="formulario_natural">
         
           <!-- Formulario Login -->
   		<div class="container">
     	 <div class="row">
      	  <div class="col-xs-12 col-md-4 col-md-offset-4">
          <!-- Margen superior (css personalizado )-->
          <div class="spacing-1"></div>
            <fieldset>

              <legend class="center">Registro Persona Natural</legend>


           

               <label class="sr-only" for="user">Nombre</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
              </div>

           
              <div class="spacing-2"></div>

         
              <label class="sr-only" for="user">Apellido</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido">
              </div>

              <div class="spacing-2"></div>

                 <label class="sr-only" for="user">Dni</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="dni" placeholder="DNI">
              </div>

       
              <div class="spacing-2"></div>

             <label class="sr-only" for="user">Correo</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="correo" placeholder="Correo">
              </div>

                <div class="spacing-2"></div>

                 <label class="sr-only" for="user">Direccion</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="direccion" placeholder="Direccion">
              </div>
  
                <div class="spacing-2"></div>

               <label class="sr-only" for="user">Telefono</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="telefono" placeholder="Telefono">
              </div>
    
              <div class="row" id="load2" hidden="hidden">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                  <img src="img/load.gif" width="100%" alt="">
                </div>
                <div class="col-xs-12 center text-accent">
                  <span>Validando información...</span>
                </div>
              </div>

          
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                  <div class="spacing-2"></div>
                  <input type="submit" class="btn btn-primary btn-block" name="save-natural" id="registro_natural" value="Registrar">
                  
                  <a href="tablas/tabla-naturales.php"></a>
                  
                </div>
              </div>

            </fieldset>
          </form>
       	</div>
   	  </div>
	 </div>
<?php  include("componentes/final.php"); ?>