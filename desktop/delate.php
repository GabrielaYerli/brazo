<?php 
require_once "../conexionBase.php"; 
$consulta="SELECT * FROM tb_registro";
$resultado= $conexion->query($consulta);
while($fila=mysqli_fetch_array($resultado)){
    $delateT="DELETE FROM tb_registro WHERE id ";
    $resultadoD= $conexion->query($delateT);
    
    header('Location: usuario.php');
}
?>