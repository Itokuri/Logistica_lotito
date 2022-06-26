<?php

$idrobado=$_GET['idrobado'];
echo "idrobado: ";
echo $idrobado;
echo " ";

$idpaquete=$_GET['idpaquete'];
echo "idpaquete: ";
echo $idpaquete;
echo " ";

$idcamion=$_GET['idcamion'];
echo "idcamion: ";
echo $idcamion;
echo " ";



$instruccion="insert into paquetes_perdidos(ID, paquetes, camion) values('$idrobado','$idpaquete','$idcamion')";

    
    $host='localhost';
    $user='root';
    $password='';
    $baseDeDatos='logistica_lotito';

    $conexion=mysqli_connect($host,$user,$password,$baseDeDatos)
    or die('Error al conectarse.');

    $resultado = mysqli_query($conexion,$instruccion);

 mysqli_close($conexion);

?>