<?php 

include("../db.php");


if(isset($_GET['id'])){

	$id = $_GET['id'];
	$query = "DELETE FROM articulos WHERE id = $id";
	$result = mysqli_query($conn ,$query);
	if (!$result) {
		die("Connection Fallida");
	}

 	$_SESSION['mensaje'] = 'Se a eliminado correctamente';
 	$_SESSION['tipo_mensaje'] = 'danger';

	header("Location: ../index.php");

}


?>