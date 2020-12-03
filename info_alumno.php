<?php

include 'conexion.php';

$datos=array();

$alumno=$_GET['ID_alumno'];


$query_consulta_usuario="SELECT ID_papas FROM alumnos WHERE ID_alumno='".$alumno."'";
$ejecutar= mysqli_query($connect, $query_consulta_usuario);
$result=mysqli_fetch_assoc($ejecutar);

if($result){
    $query_consulta_usuario="SELECT * FROM padres WHERE ID_papas='".$result['ID_papas']."'";
    $ejecutar= mysqli_query($connect, $query_consulta_usuario);
    foreach($ejecutar as $row){
        $datos[]=$row;
    }
    echo json_encode($datos);
}


