<?php

  // database connection
  $connection = mysqli_connect("ftp.smartid.website","u180008257_CCompanion","CCompanion1PASS","u180008257_CCompanion");

  if(!$connection){
    die("Connection failed: ".mysql_connect_error());
  }

 ?>
