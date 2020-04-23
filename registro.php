<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de Usuarios</title>

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
 
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/sweetalert.css">
   
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>


    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
   
          <div class="spacing-1"></div>

          <form id="formulario_registro">
           
            <fieldset>

              <legend class="center">Registro de Usuarios</legend>

          
              <label class="sr-only" for="user">Nombre</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
              </div>


              <div class="spacing-2"></div>

           
              <label class="sr-only" for="user">Usuario</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="usuario" placeholder="Usuario">
              </div>

           
              <div class="spacing-2"></div>

       
              <label class="sr-only" for="clave">Contraseña</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" autocomplete="off" class="form-control" name="clave" placeholder="Contraseña">
              </div>

          
              <div class="spacing-2"></div>

            <label class="sr-only" for="clave">Verificar contraseña</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" autocomplete="off" class="form-control" name="clave2" placeholder="Verificar contraseña">
              </div>

             
              <div class="row" id="load" hidden="hidden">
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
                  <button type="button" class="btn btn-primary btn-block" name="button" id="registro">Registrate</button>
                </div>
              </div>

              <a href="index.php"></a>

              <div class="col-xs-8 col-xs-offset-2 center">
                <div class="spacing-2"></div>
                <a href="index.php">Atrás</a>
              </div>


            </fieldset>
          </form>
        </div>
      </div>
    </div>


    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>
 
    <script src="js/sweetalert.min.js"></script>
  
    <script src="js/operaciones.js"></script>
  </body>
</html>
