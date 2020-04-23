<?php
  // Se prendio esta mrd :v
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../../index.php');
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>

    
      <link rel="stylesheet" href="../../css/style.css">

      <link rel="stylesheet" href="../../css/buttons.css" >

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  </head>
  <body>
    
    <div class="center">
     <h2> Bienvenido Administrador <?php echo ucfirst($_SESSION['nombre']); ?></h2>
    </div>
  
              <form class="module">
       
                <div class="center">
                  <legend class="center" >Modulo</legend>

                 
                      
                      <button  type="button" class="btn btn-info" name="button" id="registro" onclick="location='../../registro.php'" >Registro de trabajadores</button>
                      

                                     
                      <button type="button" class="btn btn-info" name="button" id="login" onclick="location='../../Natural-registro.php'" >Registro de personas naturales</button>
                     
                      <div class="spacing-2"></div>
             
                       <a href="Juridica-registro.php">       
                      <button type="button" class="btn btn-info" name="button" id="login">Registro de personas juridicas</button>
                      </a>

                      <a href="Equipo-registro.php">  

                     <button type="button" class="btn btn-info" name="button" id="login">Registro de equipos</button>
                 </div>
              </form>
       
              <div class="sesion">

                    <a href="../../controller/cerrarSesion.php" >
                       <button type="button" class="btn btn-secondary" name="button">Cerrar sesion</button>
                    </a>
              </div>
  </body>
</html>
