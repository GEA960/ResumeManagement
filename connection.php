<?php

  // database connection
  $connection = mysqli_connect("ftp.main.geaa.tech","u180008257_CCompanion","","u180008257_CCompanion");

  if(!$connection){
    die("Connection failed: ".mysql_connect_error());
  }

 ?>
