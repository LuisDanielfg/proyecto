<?php

session_start();
session_destroy();
if(!empty($_SESSION["idlogin"])){
    if($_SESSION["idlogin"] == 1){
        header("location: ../login/login.php");
    
    }else{
        
    if($_SESSION["idlogin"]== 2){
        header("location: ../login/recuperacion.php");
                                }
        }
    

}


?>