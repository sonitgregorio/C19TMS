<?php
$con = mysqli_connect("localhost","root","","db_lsi");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }

$id = $_SESSION['username'];
$query = "SELECT * from admin_register where username='".$id."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Personal Information</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min1.css">
    <link rel="stylesheet" href="assets/css/personal-info.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
           <form action="code.php" method="post">
                <h2 class="text-center"><strong><img src="assets/img/carigara.png" height="70px;"></i> Please </strong>complete the information below.</h2>
                <input name="id" type="" value="<?php echo $row['account_id'];?>">
                <div class="form-group"><input class="form-control" required="" type="text" name="name" placeholder="Name" autocomplete="off"></div>
                <div class="form-group"><input class="form-control" required="" type="number" name="age" placeholder="Age" autocomplete="off"></div>
                <div class="form-group"><input class="form-control" required="" type="text" name="address" placeholder="Address" autocomplete="off"></div>
                <div class="form-group">Birthdate:<input class="form-control" required="" type="Date" name="birthday" placeholder="Birthdate"></div>
                <div class="form-group"><input class="form-control" required="" type="text" name="citizenship" placeholder="Citizenship" autocomplete="off"></div>
                <div class="form-group"><input class="form-control" required="" type="number" name="number" placeholder="Mobile Number" autocomplete="off"></div>
                <div class="form-group"><input class="form-control" required="" type="text" name="place-from" placeholder="Place From" autocomplete="off"></div>
                <div class="form-group">
                <div class="form-group">Date of Arrival:<input class="form-control" required="" type="Date" name="date-arrival" placeholder="Date of Arrival" autocomplete="off"></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" name="add_data" type="submit">Finish Up</button>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>