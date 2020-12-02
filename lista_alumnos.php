<?php

include 'conexion.php';

$datos=array();


$query_consulta_usuario="SELECT * FROM alumno WHERE ID_alumno>0";
$ejecutar= mysqli_query($connect, $query_consulta_usuario);

foreach($ejecutar as $cadena){
$datos[]=$cadena;
}

echo json_encode($datos);
