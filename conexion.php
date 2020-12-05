<?php
  $host = "us-cdbr-east-02.cleardb.com";
  $password = "9a53c371";
  $user = "b264f981fb8a4e";
  $db = "heroku_2a648a861b599d3";

  $connect = new mysqli($host, $user, $password, $db);
  if($connect->connect_error){
    die("Fallo en la conexion" .$connect->connection_error);
  }
  
