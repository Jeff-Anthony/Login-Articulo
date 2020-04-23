<?php

include ("db.php");

if (isset($_POST['save-natural'])){

 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $dni = $_POST['dni'];
 $correo = $_POST['correo'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono'];

 $query = "INSERT INTO persona_natural(nombre, apellido, dni, correo, direccion, telefono) VALUES('$nombre','$apellido','$dni', '$correo', '$direccion', '$telefono'  )";

 	$result = mysqli_query($conn, $query);
 	if(!$result){

 			die("Conneción fallida");

 	}

 	$_SESSION['message'] = 'Persona Natural guardado correctamente';
 	$_SESSION['message_type'] = 'success';

 	header("Location: registro-natural.php");
}



?>