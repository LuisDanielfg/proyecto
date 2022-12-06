<?php
if(!empty($_POST["fileup2"])){
$carpeta = "../db/archivos/";
opendir($carpeta);
$destino = $carpeta.$_FILES['archivoInput2']['name'];
copy($_FILES['archivoInput2']['tmp_name'],$destino);
echo "<p> archivo subido </p>";
$nombre = $_FILES['archivoInput2']['name'];

header("location: /proyecto\login\login.php");}
if(!empty($_POST["fileup"])){
    $carpeta = "../db/archivos/";
opendir($carpeta);
$destino = $carpeta.$_FILES['archivoInput']['name'];
copy($_FILES['archivoInput']['tmp_name'],$destino);

$nombre = $_FILES['archivoInput2']['name'];

header("location: /proyecto\login\login.php");
echo "<div class='alert alert-danger'> Archivo subido </div>";
}
?>