<?php

include 'conexion.php';

$datos=array();

$ide=$_GET['ID_folio'];


$query_consulta_alumno="SELECT ID_alumno FROM pagos WHERE ID_folio='".$ide."'";
$ejecutar= mysqli_query($connect, $query_consulta_alumno);
$result=mysqli_fetch_assoc($ejecutar);

if($result){
    $query_consulta_alumno="SELECT * FROM alumnos WHERE ID_alumno='".$result['ID_alumno']."'";
    $ejecutar= mysqli_query($connect, $query_consulta_alumno);
    foreach($ejecutar as $row){
        $datos[]=$row;
    }
    echo json_encode($datos);
}


