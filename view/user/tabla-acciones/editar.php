<?php

include("../db.php");

	if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = "SELECT * FROM articulos WHERE id = $id";
			$result = mysqli_query($conn ,$query);
			if(mysqli_num_rows($result) == 1){

				$row = mysqli_fetch_array($result);
				$nombre = $row['nombre'];
				$descripcion = $row['descripcion'];
				$precio = $row['precio'];
				$stock = $row['stock'];			
			}
	}


	if(isset($_POST['actualizar'])){

		$id = $_GET['id'];
		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$stock = $_POST['stock'];

	


			$query = "UPDATE articulos SET nombre = '$nombre', descripcion = '$descripcion', 
			precio = '$precio', stock = '$stock' WHERE id = $id ";
			mysqli_query($conn, $query);
			header("Location: ../index.php");	
	
	

	}


?>

<!DOCTYPE html>
<html>
<head>



	<title>Editar - Persona Natural</title>

	

	<!--- BOOSTRAP 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

    <link rel="stylesheet" href="../../../css/font-awesome.min.css">
   
    <link rel="stylesheet" href="../../../css/sweetalert.css">
    
    <link rel="stylesheet" href="../../../css/style.css">

</head>
<body>
<ul class="pager">
    <li class="previous"><a href="../index.php"><span aria-hidden="true">&larr;</span> Regresar a Registro</a></li>
</ul> 


<form  action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
         
          
   		<div class="container">
     	 <div class="row">
      	  <div class="col-xs-12 col-md-4 col-md-offset-4">
          <div class="spacing-1"></div>
            <fieldset>

              <legend class="center">Editar - Articulo </legend>


           

         
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="nombre"  value="<?php echo $nombre; ?>" placeholder="Editar Nombre">
              </div>

           
              <div class="spacing-2"></div>

         
  
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="descripcion" value="<?php echo $descripcion; ?>" placeholder="Editar Descripcion">
              </div>

              <div class="spacing-2"></div>

             
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="number" class="form-control" name="precio" value="<?php echo $precio; ?>" placeholder="Editar Precio">
              </div>

                <div class="spacing-2"></div>

              
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="number" class="form-control" name="stock" value="<?php echo $stock; ?>" placeholder="Editar Stock">
              </div>


          
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                  <div class="spacing-2"></div>
                  <input type="submit" class="btn btn-success btn-block" name="actualizar" id="registro_articulo" value="Actualizar">
                  <a class="btn btn-danger btn-block" href="../index.php">Cancelar</a>                    
                </div>
              </div>

              

            </fieldset>
          </form>

</body>

</html>