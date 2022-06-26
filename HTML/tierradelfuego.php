<?php

$id=$_GET['id'];
echo "id: ";
echo $id;
echo " ";

$idpaquete=$_GET['idpaquete'];
echo "idpaquete: ";
echo $idpaquete;
echo " ";





$instruccion="insert into almacen_tierra_del_fuego(ID, paquetes) values('$id','$idpaquete')";

    
    $host='localhost';
    $user='root';
    $password='';
    $baseDeDatos='logistica_lotito';

    $conexion=mysqli_connect($host,$user,$password,$baseDeDatos)
    or die('Error al conectarse.');

    $resultado = mysqli_query($conexion,$instruccion);

 mysqli_close($conexion);

?>