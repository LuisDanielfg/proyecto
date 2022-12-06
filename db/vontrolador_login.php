<?php

if(!empty($_POST["boton"])){
    if(!empty($_POST["usuario"]) and !empty($_POST["password"]) ){
 
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql=$conexion->query("select * from login where nombre='$usuario' and contraseña='$password'");   

    if ($datos=$sql->fetch_object()) {

        $_SESSION["idlogin"]=$datos->tipo;
        $_SESSION["nombre"]=$datos->nombre;
  
       
    
        if( $conexion->query("select tipo from login where nombre='$usuario'") == 1){
            header("location: login/login.php");

          

       }else{
       if($conexion->query("select tipo from login where nombre='$usuario'") == 2){

        header("location: ../login/recuperacion.php");
       }
    }

    } else {
        echo "<div class='alert alert-danger'> Acceso Denegado</div>";
    }
    
        
    }else{
        echo "<div class='alert alert-danger'> datos faltantes </div>";
    }

    
}
?>