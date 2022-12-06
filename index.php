<!DOCTYPE html>
<?php
session_start();
include "db/db.php";
include "db/vontrolador_login.php";
if(empty($_SESSION["idlogin"])){

}else{
if($_SESSION["idlogin"]==1){
   header("location: /proyecto\login\login.php");
}
if($_SESSION["idlogin"]==2){
  header("location: /proyecto/login/recuperacion.php");
}}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>
<body style="background-color:#eee; height: 100%;">
    <main>
        <section class="container-xxl-fluid  h-1000 gradient-form " style="background-color: #eee;">
          <form method="post" action="">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg-12">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-center">
                            <img src="img/logo.jpg"
                              style="width: 185px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1">Luis Daniel Figueroa Garcia</h4>
                              <?php

                              ?>
                          </div>
          
                          <form>
                            <p>Porfavor ingresa con tu cuenta</p>
          
                            <div class="form-outline mb-4">
                              <input type="email" id="form2Example11" class="form-control" name="usuario" />
                              <label class="form-label" for="form2Example11">Usuario</label>
                            </div>
          
                            <div class="form-outline mb-4">
                              <input type="password" id="form2Example22" class="form-control" name="password"/>
                              <label class="form-label" for="form2Example22">Contraseña</label>
                            </div>
          
          
                            <div class="d-flex align-items-center justify-content-center pb-4">
                            
                                  
                              <input type="submit" value="Aceptar" class="boton" name="boton" id="boton">

                            
                            </div>

                          </form>
          
                        </div>
                      </div>
    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          </section>

            <footer class="fondo" id="fondo" name="fondo">
            <div style="width:100%; margin-top: 2%;" class=" row col-12 position-sticky">
            <div class="col-2 ml-4">
            </div>
            <div class="col-1">
            </div>
              <div class="col-4">
                <h1>Derechos reservados</h1>
              </div> 

              <div class="col-4">
                <h1> redes sociales</h1>
              </div>


            </div>
            </footer>
       </main> 

</body>
</html>