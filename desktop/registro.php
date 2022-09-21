<?php

include "../conexionBase.php";

$servero_1 = $_GET['servero_1'];
$servero_2 = $_GET['servero_2'];
$servero_3 = $_GET['servero_3'];
$servero_4 = $_GET['servero_4'];
$servero_5 = $_GET['servero_5'];
$servero_6 = $_GET['servero_6'];

$campos='base,antebrazo,brazo,muneca_griro,muneca_vertical,pinzas';
$valores="'$servero_1','$servero_2','$servero_3','$servero_4','$servero_5','$servero_6'";
$query="INSERT INTO tb_registro($campos)VALUES($valores)";
$resultado= mysqli_query($conexion,$query);


?>