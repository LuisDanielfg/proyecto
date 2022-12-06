<?php
session_start();
if(!empty($_SESSION["idlogin"])){

}  else{
    header("location: ../index.php");
 include "../db/cerrar.php";
}
if($_SESSION["idlogin"]==1){
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
    <title>Document</title>
</head>
<body class="bg-info">
    <main >

    <form method="post" action="">

        <section class="container-fluid h-100 bg-info px-0">  
                    
            <div class="bg-dark text-center text-white mb-0 px-0"> <h5> NOMBRE DE LA EMPRESA</h5>
            <?php
            echo $_SESSION["nombre"];
            echo $_SESSION["idlogin"];
            ?>
            </div>
        </section>
        <div class="container-fluid">
            <div class="row">
                            <div class="row col-12">    
                                <div style="height:100vh; width:10%; margin-top: -1%;" class="bg-dark col-2 position-sticky">
                                        <nav class="navbar flex-column  float-left ml-5">
                                                <img src="./img/logo.jpg" width="80ex" class="ml-3 mt-3">
                                                <a class="nav-link" href="../login/register.php">Registro</a>
                                                <a href="../db/control_sesion.php" class="bottom-0"> cerrar sesion</a>
                                        </nav>
                                </div>

                                <div class="col-10 pl-5 mt-5">
                                                
                                                <div class="card">
                                                    <div class="card-header">
                                                            <img src="../img/act.png" width="35wv" class="rounded float-right">
                                                            <h2>Usuarios</h2>
                                                            
                                                    </div>
                                                    <div class="card-body">
                                                            <table class="table">
                                                                <tr>
                                                                    <td>ID</td>
                                                                    <td>Nombre</td>
                                                                    <td>Contraseña</td>
                                                                    <td>Tipo</td>
                                                                </tr>

                                                                <?php
                                                                $conexion2 = new mysqli("localhost","root","","login");
                                                                $sql2 = "select * from login";
                                                                $result = mysqli_query($conexion2,$sql2);
                                                                while($mostrar = mysqli_fetch_array($result)){
                                                                ?>
                                                                                                                                <tr>
                                                                    <td><?php echo $mostrar['idlogin'] ?></td>
                                                                    <td><?php echo $mostrar['nombre'] ?></td>
                                                                    <td><?php echo md5($mostrar['contraseña']) ?></td>
                                                                    <td><?php echo $mostrar['tipo'] ?></td>
                                                                </tr>
                                                                <?php 
                                                                }?>
                                                            </table>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h2>Cambio de Contraseña</h2>
                                                        </div>
                                                        <div class="card-body">
                                                        <form>
                                                                <label  class="h2" > Nombre     </label>
                                                                <input type="email" name="nombre2" id="nombre2" class="ml-4" required>
                                                                <label  class="h2 ml-5"> nueva contraseña</label>
                                                            <input type="text" name="contraseña2" id="contraseña2" class="ml-4" required>
                                                            <label  class="h2 ml-5"> razon</label>
                                                            <input type="text" name="text" class="ml-4">
                                                            <input type="submit" value="Aceptar" class="boton" name="boton3" id="boton3">
                                                            <?php
                                                             include "../db/db.php";
                                                             include "../db/update.php";
                                                             ?>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>            
                                </div>
                            </div>

            </div>


        </div>
    </form>
    </main>
</body>
</html>