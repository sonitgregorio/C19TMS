<?php
session_start();
if(!isset($_SESSION["email"])){
header("Location: admin-login.php");
exit(); }
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
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

    $query ="SELECT * FROM lsi WHERE lsi_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach ($query_run as $row)
    {
    	?>

  <form action="code.php" method="POST">

  	<input type="hidden" name="edit_id" value="<?php echo $row['lsi_id']?>" >

    <h2 class="text-center">
    	<strong>
    		<img src="assets/img/carigara.png" height="70px;">
    		 Please 
    	</strong>Edit the information below.</h2>

    <div class="form-group">
      Name:
       <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Name" required></div>

    <div class="form-group">
      Age:
       <input type="number" name="edit_age" value="<?php echo $row['age'] ?>" class="form-control" placeholder="Age" required></div>

    <div class="form-group">
      Address:
       <input type="text" name="edit_address" value="<?php echo $row['address'] ?>" class="form-control" placeholder="Address" required></div>
    <div class="form-group">
        Birthdate:
       <input type="Date" name="edit_birthday" value="<?php echo $row['birthdate'] ?>" class="form-control" placeholder="Birthdate" required></div>
    <div class="form-group">
      Citizenship:
       <input type="text" name="edit_citizenship" value="<?php echo $row['citizenship'] ?>" class="form-control" placeholder="Citizenship" required></div>
    <div class="form-group">
      Mobile #:
       <input type="number" name="edit_number" value="<?php echo $row['mobile_number'] ?>" class="form-control" placeholder="Mobile Number" required></div>
  	<div class="form-group">
      Place From:
  		<input type="text" name="edit_place-from" value="<?php echo $row['place_from'] ?>" class="form-control" placeholder="Place From" required></div>
    <div class="form-group">
        Date of Arrival:
        <input type="Date" name="edit_date-arrival" value="<?php echo $row['date_of_arrival'] ?>" class="form-control" placeholder="Date of Arrival" required></div>
	<div class="form-group">
    Status:
		<input type="text" name="edit_status" value="<?php echo $row['status'] ?>" class="form-control" placeholder="Status" required></div>

     <a href="register.php" class="btn btn-danger">Cancel</a>
     <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
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