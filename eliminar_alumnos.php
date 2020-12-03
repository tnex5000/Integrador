<?php

include 'conexion.php';

$datos=array();


$ID_al=$_GET['ID'];
$ID_pa=$_GET['ID_pa'];

$query_modificar_alumno="DELETE  FROM alumnos WHERE ID_alumno='".$ID_al."'";


$ejecutar= mysqli_query($connect, $query_modificar_alumno);
$result=mysqli_fetch_assoc($ejecutar);

if($ejecutar){
    $query_modificar_padres="DELETE FROM padres WHERE ID_papas='".$ID_pa."'";
    $ejecutar1= mysqli_query($connect, $query_modificar_padres);
    $result1=mysqli_fetch_assoc($ejecutar1);
    if($ejecutar1){
        echo "1";
    }else{echo "2";}
}else{echo "3";}


