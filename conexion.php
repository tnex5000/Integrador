<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "guarderia";

  $connect = new mysqli($host, $user, $password, $db);
  if($connect->connect_error){
    die("Fallo en la conexion" .$connect->connection_error);
  }

