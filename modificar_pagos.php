<?php

include 'conexion.php';

$datos=array();

$folio=$_GET['folio'];
$monto=$_GET['monto'];
$motivo=$_GET['motivo'];


$query_modificar_pagos="UPDATE pagos SET Monto='".$monto."', Motivo_de_pago='".$motivo."'
WHERE ID_folio='".$folio."'";


$ejecutar= mysqli_query($connect, $query_modificar_pagos);
$result=mysqli_fetch_assoc($ejecutar);

if($ejecutar){
    echo 1;
}



