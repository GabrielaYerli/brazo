<?php
    require_once '../conexionBase.php';
    $valida=false;
    $usu=$_POST["usuario"];
    $pwd=$_POST["password"];
    $consulta="SELECT * FROM tb_login";
    $resultado= $conexion->query($consulta);
    
    while($fila=mysqli_fetch_array($resultado)){
        require_once('../funciones.php');//llama el archivo de funciones para poder desencriptar la contrasena que se guarda en la base de datos
        $pass = desencriptar($fila[2]);//despues de desencriptar se guarda en un variable para proceder la verificacion de datos 
        
        if($usu==$fila[1] && $pwd==$pass && $fila[4]==0){//se verifica que los datos coincidan
            $actualizar="UPDATE tb_login SET estado=1 WHERE id_usu='$usu'";//actualiza el estado de 0 a 1
            //insertar el usuario al tb_registro
            $campos="docper";
            $valores="'$usu'";
            $sql= "INSERT INTO tb_registro($campos) VALUES ($valores)";
            $resultado= mysqli_query($conexion,$sql);
            $resultado2= $conexion->query($actualizar);
            session_start();
            $_SESSION['login'];
            $_SESSION['us']=$_REQUEST["usuario"];
            $valida = true;
            header('Location: ../desktop/usuario.php');
            die();
        }else{
           echo '<script>window.location.href="login.php?error=401"</script>';//en caso que no coincidan el arrojara por medio de la url 401 que es error de credenciales

        }
    }


  
?>