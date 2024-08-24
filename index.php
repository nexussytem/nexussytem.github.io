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
        <h1>Registrate</h1>
        <form action="php/registro_usuario_be.php" method="post">
            <div class="username">
                <input type="text" placeholder="nombre y apellido" name="nombre_y_apellido">
            
            </div>
            <div class="username">
                <input type="text" placeholder="nombre de usuario" name="nombre_de_usuario">
                
            </div>
            <div class="username">
                <input type="text" placeholder="correo" name="correo">

            </div>

            <div class="username">
                <input type="password" placeholder="contraseña" name="contraseña">
                
            </div>
            <input type="submit" value="registrar">
            <div class="registrarse">
                Tienes cuenta? <a href="http://localhost/registro-login/indexlogin.php">inicia sesion!</a>
            </div>
        </form>
    
    </div>

<body>
<html>