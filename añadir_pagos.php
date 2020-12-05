<?php

include 'conexion.php';

$Nom_al=$_GET['Nom_al'];
$Monto=$_GET['Monto'];
$Motivo_de_pago=$_GET['Motivo_de_pago'];




$query_get_id_al="SELECT ID_alumno FROM alumnos WHERE Nombre='".$Nom_al."'";
$ejecutar= mysqli_query($connect, $query_get_id_al);
$result=mysqli_fetch_assoc($ejecutar);


if($result){

$query_insertar_pago="INSERT INTO pagos VALUES(NULL,'".$result['ID_alumno']."','".$Monto."','".$Motivo_de_pago."'";
$ejecutar= mysqli_query($connect, $query_insertar_pago);
$result=mysqli_fetch_assoc($ejecutar);

if ($ejecutar){
echo 1;

}else{echo "error";}

}else{echo 2;}
