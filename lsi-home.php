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
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amita">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
    <div>
        <div class="header-blue" style="height: 5px;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                <div class="container-fluid"><img data-bs-hover-animate="tada" src="assets/img/carigara.png" style="margin-left: 5px;margin-top: 1px;height: 59px;width: 64px;"><a class="navbar-brand" href="index.php" style="margin-left: 13px;">CARIGARA COVID-19 TRACKING AND MONITORING SYSTEM</a>

                    <div class="collapse navbar-collapse" id="navcol-1">
                    <form class="form-inline mr-auto" target="_self"></form><span class="navbar-text"> <a class="login" href="personal-info.php">Register</a></span>
                    <a class="btn btn-light action-button" role="button" href="logout.php">Logout (<?php echo $_SESSION['username']; ?>)</a>
                </div>
                </div>
            </nav>
            <input name="id" type="hidden" value="<?php echo $row['account_id'];?>">
            <?php  
                $account_detail = $row['account_id'];
            ?>
</div>
</div>
  <div class="card-body">
    <div class="table-responsive">
        <p style="text-align: center; font-family: Berlin Sans FB;font-size: 40px;">
            LSI INFORMATION PAGE
        </p> 
      <br>
      <?php
      $connection = mysqli_connect("localhost","root","","db_lsi");
          $query = "SELECT * FROM lsi where account_id='".$account_detail."'";
          $query_run = mysqli_query($connection, $query);
      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr style="text-align: center;">
            <th>LSI Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Birthdate</th>
            <th>Citizenship</th>
            <th>Mobile Number</th>
            <th>Place From</th>
            <th>Arrival Date</th>
            <th>Status</th>
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
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['age']; ?></td>
            <td><?php  echo $row['address']; ?></td>
            <td><?php  echo $row['birthdate']; ?></td>
            <td><?php  echo $row['citizenship']; ?></td>
            <td><?php  echo $row['mobile_number']; ?></td>
            <td><?php  echo $row['place_from']; ?></td>
            <td><?php  echo $row['date_of_arrival']; ?></td>
            <td><?php  echo $row['status']; ?></td>              
          </tr>
<?php
  } 
}
else {
    echo "No Record Found, Please Register First !";
}
?>          
        </tbody>
      </table>
    </div>
  </div>
<br><br><br>
<?php  
include("assets/include/footer.php") //footer
?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
