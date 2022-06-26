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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jujuy.css">
    <title>Iniciar sesión en Logística Lolito</title>
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
    <form action="tierradelfuego.php" method="GET">
      <center>
        <div class="form">     
          <h2>Ingrese los datos de su cuenta</h2>
          <input type="text" id="id"name="id" placeholder="Ingrese el ID"><br></br>
          <input type="text" id="idpaquete"name="idpaquete" placeholder="Ingrese el ID de paquete"><br></br>
          <button type="submit" name="button">Ingresar</button>
        </div>
      </center>
    </form>
    
</body>
</html>