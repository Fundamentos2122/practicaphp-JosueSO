<?php 
    session_start();
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
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body class="container">
    <?php include("banner.php"); ?>

    <div class="row mt-5">
        <div class="col-3">
            <img src="../images/error.png" alt="" class="img-fluid">
        </div>
        <div class="col-9 h4">
            <?php 
                if (array_key_exists("error", $_GET)){
                    echo $_GET["error"];
                }
                else {
                    header("Location: http://localhost/practicaphp/");
                }
            ?>
        </div>
    </div>
</body>
</html>