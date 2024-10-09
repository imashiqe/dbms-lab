<?php
 require_once('db.php');
    session_start();
 $id = $_GET['user_id'];
  $delete = "DELETE FROM user WHERE id = $id";
//  mysqli_query($db, $delete);

if(mysqli_query($db, $delete))
{
  $_SESSION['delete'] = "Data deleted successfully";  
  header('location: userlist.php');
}
else
{
  echo "Failed to delete";
}
?>