<?php
  $host = "us-cdbr-east-02.cleardb.com";
  $password = "0273922d";
  $user = "b26135417f5b96";
  $db = "heroku_a715c3da7fe3225";

  $connect = new mysqli($host, $user, $password, $db);
  if($connect->connect_error){
    die("Fallo en la conexion" .$connect->connection_error);
  }
  
