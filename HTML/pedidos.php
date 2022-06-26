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
    <script src="h.js"></script>
    <link rel="stylesheet" href="colores.css">
    <title>Seguimiento</title>

</head>
<body onload="f()">
    <div class="cabecera">
        <header>
          <nav>
           <ul class="menu">
            <li class="menuLi" > <a href="https://www.google.com.ar/maps" class="menuA"> Seguimiento </a></li> 
            <li class="menuLi"> <a href="paquetes-perdidos.php" class="menuA"> paquetes perdidos </a></li> 
            <li class="menuLi"> <a href="almacen_tierra_fuego.php" class="menuA"> Almacen Tierra del fuego</a></li> 
            <li class="menuLi"> <a href="jujuy.php" class="menuA"> Almacen jujuy </a></li> 
           </ul>
         </nav>
         </header>
       </div>
    <center>
        <form action="ingreso-pedidos.php" method="GET"> 
         
            <div class="formpedido1" style="float:left;"> 
                <h3>Ingrese los datos del paquete</h3> 
                <br>          
                <label for="idpedido">Ingrese el ID del pedido:</label><br></br>
                <input type="text" id="idpedido"name="idpedido"><br></br>
                <label for="nombre">Ingrese su nombre:</label><br></br>
                <input type="text" id="nombre"name="nombre"><br></br>
                <label for="apellido">Ingrese la descripcion del pedido: </label><br></br>
                <input type="text" id="descripcion"name="descripcion"><br></br>
                <label for="direccion">Ingrese su direccion: </label><br></br>
                <input type="text" id="direccion"name="direccion"><br></br>
                <label for="fragil">¿El producto es fragil?</label><br></br>
                <select name="fragil" id="fragil">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select><br><br>        
                <label for="fechacompra">Ingrese la fecha de compra</label><br></br>
                <input type="date" id="fechacompra"name="fechacompra"><br></br>
                <label for="fechacompra">Ingrese la fecha de entrega</label><br></br>
                <input type="date" id="fechaentrega"name="fechaentrega"><br></br> 
            </div>
        

            <div class="formpedido2" style="margin-left: 35px;float:left;">   
                <h3>Ingrese los datos del conductor</h3>   
                <br>      
                <label for="legajoconductor">Ingrese el legajo del conductor:</label><br></br>
                <input type="text" id="legajoconductor"name="legajoconductor"><br></br>
                <label for="nombreconductor">Ingrese su nombre:</label><br></br>
                <input type="text" id="nombreconductor"name="nombreconductor"><br></br>
                <label for="apellidoconductor">Ingrese su apellido:</label><br></br>
                <input type="text" id="apellidoconductor"name="apellidoconductor"><br></br>
                <label for="dniconductor">Ingrese su DNI:</label><br></br>
                <input type="text" id="dniconductor"name="dniconductor"><br></br>
                <label for="fragil">¿El conductor posee licencia?</label><br></br>
                <select name="lic" id="lic">
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select><br><br>        
                <label for="telefonoconductor">Ingrese su telefono: </label><br></br>
                <input type="text" id="telefonoconductor"name="telefonoconductor"><br></br>
                <label for="mailconductor">Ingrese su mail: </label><br></br>
                <input type="text" id="mailconductor"name="mailconductor"><br></br>
            </div>

            <div class="formpedido3" style="margin-left: 35px;float:left;">   
                <h3>Ingrese los datos del transporte</h3>     
                <br>
                <label for="placacamion">Ingrese la placa del camion:</label><br></br>
                <input type="text" id="placacamion"name="placacamion"><br></br>
                <label for="idpaquetes">Ingrese el id de los paquetes:</label><br></br>
                <input type="text" id="idpaquetes"name="idpaquetes"><br></br>
                <label for="idconductor">Ingrese el ID del conductor:</label><br></br>
                <input type="idconductor" id="id"name="idconductor"><br></br>
                <label for="destino">Ingrese el destino del paquete:</label><br></br>
                <input type="text" id="destino"name="destino"><br></br>
                <label for="permisos">¿El camion cuenta con los permisos requeridos?</label><br></br>
                <select name="permisos" id="permisos">
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select><br><br>                
            </div> 
            <button type="submit" name="button" class="finalizar">Finalizar pedido</button> 
        </form>
    

</center>


    
</body>
</html>