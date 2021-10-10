<?php
session_start();
$varsession = $_SESSION['usuario'];
if($varsession == null || $varsession == ''){
    echo "Acceso denegado";
    die();
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-filesize">
        <title>Home</title>
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <p>Hello world!</p>
    </body>
</html>