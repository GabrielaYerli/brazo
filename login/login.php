<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php  	
    require_once '../style/css.php';
    require_once '../links/link.php';
    ?>
	<title>Login</title>
</head>
<body class="body-login">
    <div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="../img/descarga.png">
                <h2>Brazo Robotico</h2>
            </div>
            <div class="menu ">
                <a href="login.php"><li class="module-login active">Login</li></a>
                <a href="../registro/registro.php"><li class="module-login active">Registro</li></a>
            </div>
        </div>
        <form action="checklogin.php" method="post" class="form">
            <div class="welcome-form">
                <h1>BIENVENIDOS A <span class="titulo_span">REGISTRO DE MOVIMIENTOS</span></h1>
            </div>
            <div class="user line-input">
                <label><ion-icon name="person-circle-outline"></ion-icon></label>
                <input type="number" name="usuario" id="usuario" placeholder="Numero de identificacion"><!-- numero de identificacion-->
            </div>
            <div class="user password line-input">
                <label><ion-icon name="lock-closed-outline" ></ion-icon></label>
                <input type="Password" name="password" id="password" placeholder="password"><!-- contrasena -->
            </div>
            
            <button type="submit"><ion-icon name="enter-outline" class="iconButton"></ion-icon> Entrar</button>
        </form>  
        
    </div>
</body>
</html>