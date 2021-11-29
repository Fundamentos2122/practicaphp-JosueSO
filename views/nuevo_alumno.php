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

    <?php 
        include("../models/DB.php");
    
        $connection = DBConnection::getConnection();

        var_dump($connection);
    ?>
</body>
</html>