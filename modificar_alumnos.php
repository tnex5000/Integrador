<?php

include 'conexion.php';

$datos=array();

$nom_al=$_GET['nom_al'];
$nacimiento=$_GET['nacimiento'];
$nom_papa=$_GET['nom_papa'];
$cel_papa=$_GET['cel_papa'];
$nom_mama=$_GET['nom_mama'];
$cel_mama=$_GET['cel_mama'];
$domicilio=$_GET['domicilio'];
$ID_al=$_GET['ID'];
$ID_pa=$_GET['ID_pa'];

$query_modificar_alumno="UPDATE alumnos SET Nombre='".$nom_al."', Fecha_nacimiento='".$nacimiento."'
,Domicilio='".$domicilio."'WHERE ID_alumno='".$ID_al."'";


$ejecutar= mysqli_query($connect, $query_modificar_alumno);
$result=mysqli_fetch_assoc($ejecutar);

if($result){
    $query_modificar_padres="UPDATE padres SET  Nombre_papa='".$nom_papa."',Celular_papa='".$cel_papa."'
    Nombre_mama='".$nom_mama."',Celular_mama='".$cel_mama."'WHERE ID_papas='".$ID_pa."'";
    $ejecutar= mysqli_query($connect, $query_modificar_padres);
    $result=mysqli_fetch_assoc($ejecutar);
    if($result){
        echo "1";
    }
}


