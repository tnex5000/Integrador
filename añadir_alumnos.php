<?php

include 'conexion.php';

$nom_al=$_GET['nom_al'];
$nacimiento=$_GET['nacimiento'];
$nom_papa=$_GET['nom_papa'];
$cel_papa=$_GET['cel_papa'];
$nom_mama=$_GET['nom_mama'];
$cel_mama=$_GET['cel_mama'];
$domicilio=$_GET['domicilio'];


$query_insertar_papas="INSERT INTO padres VALUES(NULL,'".$nom_papa."','".$cel_papa."','".$nom_mama."',
'".$cel_mama."')";
$ejecutar= mysqli_query($connect, $query_insertar_papas);
$result=mysqli_fetch_assoc($ejecutar);

if ($result){
$query_id_papas="SELECT ID_papas FROM padres WHERE Nombre_papa='".$nom_papa."'";
$ejecutar= mysqli_query($connect, $query_id_papas);
$result=mysqli_fetch_assoc($ejecutar);
echo $result['ID_papas'];
if($result){
$query_insertar_alumnos="INSERT INTO alumnos VALUES(NULL,'".$nom_al."','".$nacimiento."','".$domicilio."',
'".$result['ID_papas']."')";
$ejecutar= mysqli_query($connect, $query_insertar_alumnos);
$result=mysqli_fetch_assoc($ejecutar);
 
if($result){
    echo 1;
}

}

}


