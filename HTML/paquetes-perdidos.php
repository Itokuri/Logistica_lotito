<?php 
    session_start();
    if(empty($_SESSION["usuario"])){
        echo "error";
    }else{
        $variable = $_SESSION["usuario"];
    }

    echo $variable;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="pq.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="cabecera">
        <header>
          <nav>
           <ul class="menu">
            <li class="menuLi" > <a href="https://www.google.com.ar/maps" class="menuA"> Seguimiento </a></li> 
            <li class="menuLi"> <a href="pedidos.php" class="menuA"> Pedidos </a></li> 
            <li class="menuLi"> <a href="almacen_tierra_fuego.php" class="menuA"> Almacen Tierra del fuego</a></li> 
            <li class="menuLi"> <a href="jujuy.php" class="menuA"> Almacen jujuy </a></li> 
           </ul>
         </nav>
         </header>
       </div>
    <form action="pq_perdidos.php" method="GET" class="form2">
        <center>
          <div class="form">     
            <h2>Ingrese los datos del paquete robado</h2>
            <input type="text" id="idrobado"name="idrobado" placeholder="Ingrese el id del paquete robado"><br></br>
            <input type="text" id="idpaquete"name="idpaquete" placeholder="Ingrese el id del paquete"><br></br>
            <input type="text" id="idcamion"name="idcamion" placeholder="Ingrese el id del camion"><br></br>
            <button type="submit" name="button">Ingresar</button>
          </div>
        </center>
      </form>
</body>
</html>