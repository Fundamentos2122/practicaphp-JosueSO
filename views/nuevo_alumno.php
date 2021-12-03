<?php 
    //Verificar que el usuario esté logueado
    session_start();

    if (!array_key_exists("nombre_usuario", $_SESSION)) {
        header("Location: http://localhost/practicaphp/views/login/");
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
</head>
<body class="container">
    <?php include("banner.php"); ?>

    <h4 class="border-bottom py-2">Agregar alumno</h4>
    <form action="../controllers/alumnosController.php" method="post" class="row" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="POST">
        <div class="col-6 form-group">
            <label for="cve_unica">Clave única</label>
            <input type="text" name="cve_unica" class="form-control">
        </div>
        <div class="col-6 form-group">
            <label for="nombre_completo">Nombre Completo</label>
            <input type="text" name="nombre_completo" class="form-control">
        </div>
        <div class="col-6 form-group">
            <label for="fecha_nacimiento">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control">
        </div>
        <div class="col-6 form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <div class="col-12 form-group text-center">
            <input type="submit" value="Guardar" class="btn btn-success">
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</body>
</html>