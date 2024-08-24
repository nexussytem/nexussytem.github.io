<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo pestaña.icon">
</head>
<body>
    <div class="formulario">
        <h1>Inicio de Sesion</h1>
        <form action="php/login_usuario_be.php" method="post">
            <div class="username">
                <input type="text" placeholder="correo" name="correo" >
                
            </div>
            <div class="username">
                <input type="password" placeholder="contraseña" name="contraseña">
            
            </div>
            <div class="recordar">¿Olvidaste tu contraseña?</div>
            <input type="submit" value="Iniciar">
            <div class="registrarse">
                No tienes cuenta? <a href="http://localhost/registro-login/index.php">registrate!</a>
            </div>
        </form>
    
    </div>

<body>
<html>