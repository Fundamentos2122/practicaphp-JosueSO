<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fundamentos2122.github.io/framework-css-JosueSO/css/framework.css">
    <title>Document</title>
    <style>
        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .card {
            border-radius: 0.5em;
        }
    </style>
</head>
<body class="container">
    <?php include("banner.php"); ?>

    <div class="bg-secondary text-right py-3 px-1">
        <a href="nuevo_alumno.php" class="btn btn-primary">Nuevo</a>
    </div>

    <div class="row pt-2">
        <?php include("../controllers/alumnosController.php"); ?>
        <!-- <div class="col-3">
            <img src="https:\\picsum.photos\1000\1000" class="img-fluid card">
            <p>Josué Sánchez Olvera</p>
        </div> -->
    </div>
</body>
</html>