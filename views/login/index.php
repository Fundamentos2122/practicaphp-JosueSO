<?php 
    //Verificar que el usuario esté logueado
    session_start();

    if (array_key_exists("nombre_usuario", $_SESSION)) {
        header("Location: http://localhost/practicaphp/views/");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fundamentos2122.github.io/framework-css-JosueSO/css/framework.css">
    <title>Document</title>
    <style>
        .btn-block {
            display: block;
            width: 100%;
        }
    </style>
</head>
<body class="container">
    <?php include("../banner.php"); ?>

    <div class="mt-3 w-25 mx-auto">
        <h4>Inicio de sesión</h4>
        <form action="../../controllers/loginController.php" method="POST">
            <input type="hidden" name="_method" value="POST">
            <div class="form-group">
                <label for="nombre_usuario">Nombre de Usuario</label>
                <input type="text" name="nombre_usuario" class="form-control">
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" class="form-control">
            </div>
            <div class="form-group text-center">
                <input type="submit" value="Iniciar sesión" class="btn btn-block btn-info">
            </div>
        </form>
    </div>
</body>
</html>