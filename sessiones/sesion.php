<?php

    session_start();
    if (!isset($_SESSION['login'])) {
        include_once '../conexion.php';
        $usuario="UPDATE tb_login Set estado=0 WHERE id_usu='$usuario'";
        $conexion->query($sql_salida);

         session_destroy():
         header('location: ../login/login.php');
         echo "cierre de session exitoso";
    }else{
        if(isset($_SESSION['login'])){
            $usuario="UPDATE tb_login Set estado=1 WHERE id_usu='$usuario'";
            $conexion->query($sql_salida);
            header('Location:../desktop/usuario.php');
    
        }
    }
?>