<?php
  //connexion à la base de données

  $server = "localhost";
  $user = "root";
  $pass = "root";
  $database = "partielfagon";
  
  $conn = mysqli_connect($server, $user, $pass, $database);
 
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  ?>