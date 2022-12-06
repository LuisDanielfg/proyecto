<?php

if(!empty($_POST["boton3"])){   
    if(!empty($_POST["nombre2"])){    
        $usuario2 = $_POST["nombre2"];
        $contraseña = $_POST["contraseña2"];
        
        $sql=$conexion-> query("UPDATE login Set contraseña='$contraseña' where nombre='$usuario2'");
   
  
    
        if($sql){
        echo"<div class='alert alert-danger'> cambio exitoso</div>";
    
        }else{

        echo"<div class='alert alert-danger'> cambio fallido</div>";
        echo $conexion->error;
        }
    }else{
    echo"<div class='alert alert-danger'> faltan datos</div>";
    }
}

?>