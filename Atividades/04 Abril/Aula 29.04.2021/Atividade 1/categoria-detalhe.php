<?php
$categoria = strtoupper ($_GET['cat']);
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title> 
    <?php

    echo $categoria;

    ?>

    </title>
</head>
<body>
    <h1>
    <?php
    echo $categoria;
    ?>
    </h1>
    <hr>
    <p> Página com os produtos da categoria </p>
</body>
</html>
