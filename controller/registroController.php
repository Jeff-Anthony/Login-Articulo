<?php

  $name   = $_POST['nombre'];
  $user  = $_POST['usuario'];
  $clave  = $_POST['clave'];
  $clave2 = $_POST['clave2'];

  if(empty($user) || empty($clave) || empty($clave2))
  {

    echo 'error_1'; // Un campo esta vacio y es obligatorio

  }else{

    if($clave == $clave2){

        # Incluimos la clase usuario
        require_once('../model/usuario.php');

        # Creamos un objeto de la clase usuario
        $usuario = new Usuario();

        # Llamamos al metodo login para validar los datos en la base de datos
        $usuario -> registroUsuario($name, $user, $clave);


     


    }else{
      echo 'error_2';
    }

  }




?>
