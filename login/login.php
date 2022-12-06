<?php
session_start();


if(empty($_SESSION["idlogin"])){

    header("location: ../index.php");
 include "../db/cerrar.php";
}
if($_SESSION["idlogin"]==2){
    header("location: ../login/recuperacion.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta8 http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../java/visor.js"></script>
    <script src="../java/visor2.js" ></script>
    <title>Document</title>
</head>
<body class="bg-info">

    <main >



        <section class="container-fluid h-100 bg-info px-0">  
            
        <div class="bg-dark text-center text-white mb-0 px-0"> <h5> NOMBRE DE LA EMPRESA</h5>
    <?php
    echo $_SESSION["nombre"];
    echo $_SESSION["idlogin"];

    ?></div>
<form method="POST" action="../db/upload.php" method="post" enctype="multipart/form-data" >
            <div class="row mt-0">    
            <div style="height:101vh; width:10%; margin-top: -1%;" class="bg-dark col-2 position-relartive">
                     <nav class="navbar flex-column  float-left ml-5">
                            <img src="./img/logo.jpg" width="80ex" class="ml-3 mt-3">
                            <a class="nav-link active" href="#">Informacion</a>
                            <a class="nav-link" href="#">Servicioss</a>
                            <a class="nav-link" href="#">administrador</a>
                            <a href="../db/control_sesion.php" class="bottom-0"> cerrar sesion</a>
                     </nav>
            </div>
      
            
                    <div class="fondo col-10 px-0 mt-5 mb-5">
                        <div class="container px-0 ">  
                            <div class="row gx-5">
                                <div class="col ">
                              
                                    <div class="card mb-2 mt-2 ml-0">
                                        <div class="card-header text-center">
                                            <h5> Nombre del area</h5>
                                            <img src="./img/RH.png" alt="RH" width="250vw">
                                        </div>
                                        <div class="card-body">
                                            <input id="archivoInput" name="archivoInput" type="file" class="file" enctype="multypart/from-data" multiple 
                                            data-show-upload="false" data-show-caption="true" accept="application/pdf" data-msg-placeholder="Selecciona el archivo a subir"
                                            onchange="validarExt()">
                                            <div id="visorArchivo">
				<!--Aqui se desplegará el fichero-->
			                                </div><br>
                                            <input type="submit" value="Enviar" class="fileup" name="fileup" id="fileup">
                                        </div>
                    
                                    </div>
                               
                                </div>
                                
                            <div class="col ">
                                <div class="card mb-2 mt-2 ml-0">
                                    <div class="card-header text-center">
                                        <h5> Nombre del area</h5>
                                        <img src="./img/RH.png" alt="RH" width="250vw">
                                    </div>
                                    <div class="card-body">
                    

                                            <input id="archivoInput2" name="archivoInput2" type="file" class="file" enctype="multypart/from-data" multiple 
                                                    data-show-upload="false" data-show-caption="true" accept="application/pdf" data-msg-placeholder="Selecciona el archivo a subir"
                                                    onchange="validarExt2()">
                                                    <div id="visorArchivo2">
                        <!--Aqui se desplegará el fichero-->
                                                    </div><br>
                                                    <input type="submit" value="Enviar" class="fileup" name="fileup2" id="fileup2">
                      
                                    </div>
                    
                                </div>
                            </div>
                            </div>
                        </div> 


                    </div>
            </form>
            </div>
        </section>
  
    </main>

</body>
</html>
