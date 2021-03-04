<?php
session_start();
if(!isset($_SESSION["email"])){
header("Location: admin-login.php");
exit(); }
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<head>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min1.css">
<link rel="stylesheet" href="assets/css/personal.css">
</head>
<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
    </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <?php
      $connection = mysqli_connect("localhost","root","","db_lsi");
          $query = "SELECT * FROM admin_register";
          $query_run = mysqli_query($connection, $query);
      ?>
      <p>
      <?php 
      if (isset($_GET["success"])==true) {
          echo "Data have been updated successfuly!";
      }
      ?>
      <?php 
      if (isset($_GET["delete"])==true){
        echo "Data have been deleted successfuly!";
      }
      ?>
      </p>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr style="text-align: center;">
            <th>ID</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Date Created</th>
            <th>Date Modified</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if(mysqli_num_rows($query_run) > 0)        
            {
              while($row = mysqli_fetch_assoc($query_run))
            {
          ?>
          <tr style="text-align: center;">
            <td><br><?php  echo $row['account_id']; ?></td>
            <td><br><?php  echo $row['email']; ?></td>
            <td><br><?php  echo $row['username']; ?></td>
            <td><br><?php  echo $row['password']; ?></td> 
            <td><br><?php  echo $row['date_created']; ?></td> 
            <td><br><?php  echo $row['date_modified']; ?></td>         
            <td>
                <form action="admin-edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['account_id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success">Update</button>
                </form>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['account_id']; ?>">
                  <button style="margin-top: 3px;" type="submit" name="delete_account" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
           <?php
             } 
            }
            else {
              echo "No Record Found";
            }
            ?>          
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<?php
include('includes/scripts.php');
?>