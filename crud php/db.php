<?php
 $db = mysqli_connect("localhost", "root", "", "crud");

 if(!$db)
 {
   die("Connection failed: " . mysqli_connect_error());
 }
 else
 {
   echo "Connected successfully";
 }
?>