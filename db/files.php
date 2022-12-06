<?php 
    if(!empty($_POST["fileup"])){
        $archivo= $_FILES["archivoInput"];
        print_r($file);
        $filename = $_FILES['archivoInput']['name'];
    }

?>