<?php


$idpaquete=$_GET['idpaquete'];
echo "idpaquete: ";
echo $idpaquete;
echo " ";

$idpaqueteperdido=$_GET['idpaqueteperdido'];
echo "idpaqueteperdido: ";
echo $idpaqueteperdido;
echo " ";



$instruccion="insert into almacen_jujuy( paquetes, paquetes_perdidos) values('$idpaquete','$idpaqueteperdido')";

    
    $host='localhost';
    $user='root';
    $password='';
    $baseDeDatos='logistica_lotito';

    $conexion=mysqli_connect($host,$user,$password,$baseDeDatos)
    or die('Error al conectarse.');

    $resultado = mysqli_query($conexion,$instruccion);

 mysqli_close($conexion);

?>