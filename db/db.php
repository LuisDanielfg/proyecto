<?php
    $conexion = new mysqli("localhost","root","","login");
    $conexion->set_charset("utf8");

    if($conexion){

    }else{
        
        echo"<div class='alert alert-danger'> sin bd</div>";
    }
?>