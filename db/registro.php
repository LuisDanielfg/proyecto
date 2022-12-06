<?php
session_start();
if(empty($_SESSION["idlogin"])){
    header("location: ../index.php");
    session_destroy();

}
if($_SESSION["idlogin"] == 1){
    header("location: ../login/login.php");

}


if(!empty($_POST["boton2"])){   
    
    if(!empty($_POST["usuario"])){    

        $usuario = $_POST["usuario"];
        $sql=$conexion->query("select * from login where nombre='$usuario'");   

        if ($datos=$sql->fetch_object()) {
            echo"<div class='alert alert-danger'> el correo ya existe </div>";} 
            else{
            $sql=$conexion-> query("INSERT INTO login (nombre, contraseña, tipo) VALUES  ('$usuario',123456,1)");
    
                   if($sql){
                        echo"<div class='alert alert-danger'> registro</div>";
                        header("location: ../login/recuperacion.php");
                         }else{
     
                        echo"<div class='alert alert-danger'> registro fallido</div>";
                         }
    }
}else{
    echo"<div class='alert alert-danger'> falta nombre</div>";
    }
}

?>