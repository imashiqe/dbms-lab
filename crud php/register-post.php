<?php
require_once('db.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
    $user_check = "SELECT COUNT(*) as total FROM user WHERE email = '$email'";
    $query = mysqli_query($db, $insert);
    $q = mysqli_query($db, $user_check);
    $after_assoc = mysqli_fetch_assoc($q);
    if($after_assoc['total'] > 0)
    {
      echo "Email already exists";
    }
    else{
      echo "Email does not exist";
    }
    if($query)
    {
      header('location: login.php');
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