<?php
require_once('db.php');
$select = "SELECT * FROM user";
$query_data = mysqli_query($db, $select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container mx-auto">
<table class="table">
        <h2 class="text-center">All User</h2>
        <?php
          if(isset($_SESSION['delete_user'])){
            ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION['delete_user']; ?>
            </div>
            <?php
          }
              
        ?>
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
             foreach($query_data as $key => $value)
             {
               ?>
                <tr>
                  <th scope="row"><?php echo $key+1; ?></th>
                  <td><?= $value['name'] ?></td>
                  <td><?= $value['email'] ?></td>
                  <td>
                     <a href="user-delete.php?user_id<?= $value['id'] ?>" class="btn btn-outline-danger">Delete</a>
                     <a href="" class="btn btn-outline-warning">Edit</a>
                  </td>                
              <?php }
             ?>
        </tbody>
      </table>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>