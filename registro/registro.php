<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  	
    require_once '../style/registroCss.php';
    require_once '../links/link.php';
    ?>
    <title>Registrate</title>
</head>
<body class="body_registro">
<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="../img/descarga.png">
                <h2>Brazo Robotico</h2>
            </div>
            <div class="menu ">
                <a href="../login/login.php"><li class="module-login active">Login</li></a>
                <a href="registro.php"><li class="module-login active">Registrar</li></a>
            </div>
        </div>

        <form action="checkregistro.php" method="post" class="form">
            <div class="welcome-form">
                <h1>BIENVENIDOS<span class="titulo_span">A REGISTRO</span></h1>
            </div>
            <div class="user line-input"><!-- solicitud de datos para registro -->
                <label><ion-icon name="person-circle-outline"></ion-icon></label>
                <input type="number" name="docper" id="docper" placeholder="Numero de identificacion"><!-- numero de identificacion -->
            </div>
            <div class="user line-input">
                <label ><ion-icon name="id-card-sharp"></ion-icon></label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombres"><!-- nombres del usuario -->
            </div>
            <div class="user line-input">
                <label ><ion-icon name="id-card-sharp"></ion-icon></label>
                <input type="text" name="apellido" id="apellido" placeholder="Apellidos"><!-- apellidos -->
            </div>
            <div class="user line-input">
                <label ><ion-icon name="call-outline"></ion-icon></label>
                <input type="number" name="celular" id="celular" placeholder="Celular"><!-- celular -->
            </div>
            <div class="user line-input">
                <label ><ion-icon name="at-outline"></ion-icon></label>
                <input type="email" name="email" id="email" placeholder="Email"><!-- correo electronico -->
            </div>
            <div class="user line-input">
                <label ><ion-icon name="lock-closed-outline"></ion-icon></label>
                <input type="password" name="pass" id="pass" placeholder="Password"><!-- contrasenia -->
            </div>
            <button type="submit"><ion-icon name="enter-outline" class="icono"></ion-icon> Registrar</button>
        </form>  
    </div>
    </div>
</body>
</html>