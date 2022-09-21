<?php 
    require_once '../conexionBase.php';
    
    $documento=$_POST['docper'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $celular=$_POST['celular'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $estado=0;
    $id=null;
    require_once '../funciones.php';//llama el archivo de funciones para poder encriptar la contrasena y guardar en la base de datos
    $passEncriptada=encriptar($pass);//guarda la contrasenia encriptada en un variable

    /* consulta e inserta los datos en la tb_persona */
    $campos="docper,nombres,apellidos,celular,email";
    $valores="'$documento','$nombre','$apellido','$celular','$email'";
    $sql= "INSERT INTO tb_persona($campos) VALUES ($valores)";
    $resultado= mysqli_query($conexion,$sql);
 

    /* consulta e inserta los datos en la tb_login */
    $campos_login="`id`, `id_usu`,`pass`,`docper`,`estado`";
    $valores_login="'$id','$documento','$passEncriptada','$documento','$estado'";
    $sql_login= "INSERT INTO tb_login($campos_login) VALUES ($valores_login)";
    $resultado_login= mysqli_query($conexion,$sql_login); 
    
    //cuando finaliza redirecciona a al login
    header('Location: ../login/login.php');
    
    ?>