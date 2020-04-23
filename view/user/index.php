<?php include 'db.php';?>
<?php session_start();


  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.php');
  }




     if(isset($_POST['add_articulo'])){
                        $nombre = $_POST['nombre'];                          
                        $descripcion = $_POST['descripcion'];
                        $precio = $_POST['precio'];
                        $stock = $_POST['stock'];  
                      
                        $sql = "INSERT INTO articulos(nombre, descripcion, precio, stock) VALUES ('$nombre','$descripcion', '$precio', '$stock')";

                        if ($conn->query($sql) === TRUE) {
                                                    
                                echo 'Correcto';                        
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Productos</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
   
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
       
    <script src="../../js/jquery-1.12.4.js"></script>

    <script>
        $(document).ready(function() {
                $('#example').DataTable({language: {
                                          "decimal": "",
                                          "emptyTable": "No hay información",
                                          "info": "Mostrando _START_ - _END_ de _TOTAL_ Datos",
                                          "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                                          "infoFiltered": "(Filtrado de _MAX_ total Datos)",
                                          "infoPostFix": "",
                                          "thousands": ",",
                                          "lengthMenu": "Mostrar _MENU_ Datos",
                                          "loadingRecords": "Cargando...",
                                          "processing": "Procesando...",
                                          "search": "Buscar:",
                                          "zeroRecords": "Sin resultados encontrados",
                                          "paginate": {
                                              "first": "Primero",
                                              "last": "Ultimo",
                                              "next": "Siguiente",
                                              "previous": "Anterior"
                                                      }
                                              }
                                      });
                                              
                                    });
        </script>


    <link rel="stylesheet" href="../../css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../../css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../../css/responsive.bootstrap.min.css">
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.dataTables.min.js"></script>
</head>

<body>

  <ul class="pager">
    <li class="previous"><a href="../../controller/cerrarSesion.php"><span aria-hidden="true">&larr;</span>Cerrar Sesión</a></li>
  </ul> 

   
        <div class="container col-9 mt-8">
           <div class="row">        
                <div class="col-md-12">
            
                    
                        <div class="card-block">
                            
                            <div class="light-font">
                              
                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a class="white-text"  style="margin-top: -15px;" href="../admin/index.php">Articulos</a></li>     
                                    <a href="#agregar-articulo" data-toggle="modal">
                                       <button type='button' class='btn btn-success btn-sm'>Insertar Articulo</button>
                                    </a>                           
                                </ol>
                              
                            </div>
                       </div>
                    </div>         
                         
            </div>
        </div>



<div id="agregar-articulo" class="modal fade" role="dialog" >
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
   
          <div class="modal-dialog">

          <form method="post" class="form-horizontal modal-content" role="form">
           
            <fieldset>

              <legend class="center">Registro de Articulo</legend>

          
              <label class="sr-only" for="user">Nombre</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
              </div>


              <div class="spacing-2"></div>

           
              <label class="sr-only" for="user">Descripción</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción">
              </div>

           
              <div class="spacing-2"></div>

       
              <label class="sr-only" for="clave">Precio</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="number" autocomplete="off" class="form-control" name="precio" id="precio" placeholder="Precio">
              </div>

          
              <div class="spacing-2"></div>

            <label class="sr-only" for="clave">Stock</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="number" autocomplete="off" class="form-control" name="stock" id="stock" placeholder="Stock">
              </div>


          

            </fieldset>
               <div class="modal-footer">
                  
                  <button type="submit" class="btn btn-primary" name="add_articulo"><span class="fa fa-plus"></span> Agregar</button>                                      
                  <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="fa fa-times-circle"></span> Cancelar</button>
              </div>
          </form>
        </div>
       </div>
      </div>
    </div>





  








    <div class="container">
 
        
        <table id="example" class="display nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>              
                  <th>Descripción</th>
                  <th>Precio</th>
                  <th>Stock</th>   
                  <th>Acciones</th>               
                </tr>
            </thead>
            <tfoot>
                <tr>
                 <th>ID</th>
                  <th>Nombre</th>              
                  <th>Descripción</th>
                  <th>Precio</th>
                  <th>Stock</th> 
                  <th>Acciones</th>  
                </tr>
            </tfoot>
            <tbody>
                 <?php 
                
                  $query = "SELECT * FROM articulos";
                  $result = mysqli_query($conn, $query);


               
              if($result->num_rows > 0){

                while($row = mysqli_fetch_array($result)) { 
                    $id =  $row['id'];
                        $id =  $row['id'];
                        $nombre = $row['nombre'];
                        $descripcion = $row['descripcion'];
                        $precio = $row['precio'];
                        $stock = $row['stock'];
                       

                        

                    ?>
                <tr>
                  <td><?php echo $id ?></td>
                  <td><?php echo $nombre ?></td>
                  <td><?php echo $descripcion ?></td>
                  <td><?php echo $precio ?></td>
                  <td><?php echo $stock ?></td>                
                    <td>
                        <a style='width:38px; height:30px' class="btn btn-primary btn-warning "  href="tabla-acciones/editar.php?id=<?php echo $row['id'] ?>"><i class="glyphicon glyphicon-pencil" ><h6></h6></i></a>
                                                 
                             <a style='width:38px; height:30px' class="btn btn-primary btn-danger" href="tabla-acciones/eliminar.php?id=<?php echo $row['id'] ?>"><i class="glyphicon glyphicon-trash"><h6></h6></i></a>                       
                                                                      
                    </td>
                                           
                    
                          
                              
                </tr>

 <?php
                   }


                                           
                        }

                                                 
?>            

            </tbody>
        </table>
    </div>


</body>

</html>
