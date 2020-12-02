<?php

include 'conexion.php';

$usuario=$_GET['usuario'];
$contraseña=$_GET['contra'];


$query_consulta_usuario="SELECT * FROM usuario WHERE usuario='".$usuario."' AND 
contrasena='".$contraseña."'";
$ejecutar= mysqli_query($connect, $query_consulta_usuario);
$resultado=mysqli_fetch_array($ejecutar);

if($resultado){
    echo '{"res": "Correcto"}';
}else{echo '{"res": "Incorrecto"}';
}

