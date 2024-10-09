<?php
require_once('db.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
    $query = mysqli_query($db, $insert);
    if($query)
    {
      echo "Successfully registered";
    }
    else
    {
      echo "Failed to register";
    }
  }
  else{
    header("Location: register.php");
  }

?>