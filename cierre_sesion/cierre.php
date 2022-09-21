<?php
    require_once '../conexionBase.php';
    $consulta="SELECT * FROM tb_login";
    $resultado= $conexion->query($consulta);
    
    $actualizar="UPDATE tb_login SET estado=0 ";//actualiza el estado de 1 a 0  
    $resultadoA= $conexion->query($actualizar); 

    while($fila=mysqli_fetch_array($resultado)){     
        if($fila[4]==0){
            session_destroy();
            
        }
        header('Location: ../login/login.php');
    }



?>