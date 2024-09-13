<?php 
    $conexion = new mysqli("localhost","root", "","crud_images");

    if($conexion) {
        echo"conexion exitosa";
    
    }else {
        echo "no se realizo la conexion";
    }
?>