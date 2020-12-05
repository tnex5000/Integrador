<?php

include 'conexion.php';

$datos=array();


$query_consulta_lista_pagos="SELECT * FROM pagos WHERE ID_folio>0";
$ejecutar= mysqli_query($connect, $query_consulta_lista_pagos);

foreach($ejecutar as $cadena){
$datos[]=$cadena;
}

echo json_encode($datos);
