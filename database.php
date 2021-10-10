<?php
    $conexion = mysqli_connect("localhost", "usuario_db", "mi_clave", "nombre_base_de_datos");
    if($conexion -> connect_errno):
        echo "Error: no se pudo conectar a MySQL debido al error ".$conexion -> connect_error;
    endif;
?>