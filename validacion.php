<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

include('database.php');

$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACIÓN</h1>
    <?php
}

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

    require 'database.php';
    sleep(2);

    $mysqli -> set_charset('utf8');
    $user = $mysqli -> real_escape_string($_POST['usuario']);
    $password = $mysqli -> real_escape_string($_POST['contrasena']);

}
mysqli_free_result($resultado);
mysqli_close($conexion);