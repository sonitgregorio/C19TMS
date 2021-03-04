<?php
session_start();
if(!isset($_SESSION["email"])){
header("Location: admin-login.php");
exit(); }
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Profile 
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
        Edit 
      </button>
    </h6>
  </div>
  <div class="card-body">
<?php
$connection = mysqli_connect("localhost","root","","db_lsi");
if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    $query ="SELECT * FROM admin_register WHERE account_id='$id' ";
    $query_run = mysqli_query($connection, $query);
    foreach ($query_run as $row)
    {
?>
  <form action="code.php" method="POST">
  	<input type="hidden" name="edit_id" value="<?php echo $row['account_id']?>" >
    <h2 class="text-center">
    	<strong>
    		<img src="assets/img/carigara.png" height="70px;">
    		 Please 
    	</strong>Edit the information below.</h2>
      <div class="form-group">
      Username:
       <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Email" required></div>
    <div class="form-group">
      Email:
       <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Email" required></div>
    <div class="form-group">
      Password:
       <input type="text" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Password" required></div>
     <a href="admin.php" class="btn btn-danger">Cancel</a>
        <button type="submit" name="updateaccount" class="btn btn-primary">Update</button>
  </form>
<?php }} ?>
      </div>
    </div>     
  </div>
</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>