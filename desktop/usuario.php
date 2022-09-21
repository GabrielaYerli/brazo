<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            require_once '../style/desktopcss.php';
            require_once '../links/link.php';
            require_once "../conexionBase.php";
            $consulta="SELECT * FROM tb_registro";
        ?>
        <title>Document</title>
    </head>
    <body>
    <div class="container-desktop">
        <div class="header">
            <div class="logo-title">
                <img src="../img/descarga.png">
                <h2>Brazo Robotico</h2>
            </div>
            <div class="menu ">
                <a href="../cierre_sesion/cierre.php"><li class="module-login active">Cerrar</li></a>
            </div>
        </div>
        <div class="desktop">
            <div class="welcome-desktop">
                <h1>BIENVENIDOS AL <span class="titulo_span"> REGISTRO DE MOVIMIENTOS</span></h1>
            </div>
            <table class="content-table"> 
                <thead class='content-td'> 
                    <tr> 
                        <th>Antebrazo</th> 
                        <th>Base</th> 
                        <th>Muñeca vertical</th> 
                        <th>Muñeca giro</th>
                        <th>Pinzas</th> 
                        <th>Brazo</th>  
                        <th></th>  
                    </tr> 
                </thead> 
                <tbody> 
                    <?php
                        $consulta="SELECT * FROM tb_registro";
                        $resultado= $conexion->query($consulta);
                        
                        while($fila=mysqli_fetch_array($resultado)){
                     ?>
                    <tr> 
                        <td><?php echo $fila[1];?></td> 
                        <td><?php echo $fila[2];?></td> 
                        <td><?php echo $fila[3];?></td> 
                        <td><?php echo $fila[4];?></td> 
                        <td><?php echo $fila[5];?></td> 
                        <td><?php echo $fila[6];?></td> 
                        <td></td> 
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody> 
            </table>
            <form action="delate.php" method="post" class='delate'>
                <button type="submit" class='delateButtom'><ion-icon name="trash-outline" class='delateIcon'></ion-icon>ELIMINAR</button>
            </form>
        </div>
    </div>
</body>
</html>