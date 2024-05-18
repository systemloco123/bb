<?php

   $sname = "localhost";
   $uname = "root";

   $db_name = "test_db";

   $conn = mysqli_connect($sname, $uname, $password, $db_name);

   if(!$conn) {
    echo "connection Failed";
   }