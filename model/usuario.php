<?php


  require_once('conexion.php');


  class Usuario extends Conexion
  {

    public function login($user, $clave)
    {
    
      parent::conectar();
   
      $user  = parent::salvar($user);
      $clave = parent::salvar($clave);

    
      $consulta = 'select id, nombre, usuario, clave,cargo from usuarios where usuario="'.$user.'" and clave= MD5("'.$clave.'")';
      

      $verificar_usuario = parent::verificarRegistros($consulta);

     
      if($verificar_usuario > 0){


        $user = parent::consultaArreglo($consulta);


        session_start();

      
        $_SESSION['id']     = $user['id'];
        $_SESSION['nombre'] = $user['nombre'];
        $_SESSION['usuario'] = $user['usuario'];
        $_SESSION['cargo']  = $user['cargo'];

    
        if($_SESSION['cargo'] == 1){
          echo 'view/admin/index.php';
        }else if($_SESSION['cargo'] == 2){
          echo 'view/user/index.php';
        }


     

      }else{
     
        echo 'error_3';
      }

      parent::cerrar();
    }





   public function registroUsuario($name, $user, $clave)
    {
      parent::conectar();

      $name  = parent::filtrar($name);
      $user  = parent::filtrar($user);
      $clave = parent::filtrar($clave);



      parent::query('insert into usuarios(nombre, usuario, clave, cargo) values("'.$name.'", "'.$user.'", MD5("'.$clave.'"), 2)');
    
      
      parent::cerrar();
    }






  }



?>
