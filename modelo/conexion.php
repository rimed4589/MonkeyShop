<?php 
    $conexion = new mysqli("localhost","root", "","cud_imagenes");

    if($conexion) {
        echo"conexion exitosa";
    
    }else {
        echo "no se realizo la conexion";
    }
?>