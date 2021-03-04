<?php
    $con = mysqli_connect("localhost","root","","db_lsi");
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $password = stripslashes($_REQUEST['password']);
        
    //Checking is user existing in the database or not
        $query = "SELECT * FROM `admin_register` WHERE `username`='$username' and `password`='$password'";
        $result = mysqli_query($con,$query) or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['username'] = $username;
            header("Location: lsi-home.php"); // Redirect user to index.php
            }else{
            header("Location: login.php?error=1"); // Redirect user to index.php
                }
    }else{
?>
<!DOCTYPE html>
<html>
<head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min1.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body style="background: linear-gradient(135deg, #172a74, #21a9af);
  background-color: #184e8e; height: 665px;">
    <div class="login-clean">
        <form name="login-form" method="post"><p style="font-size: 19px; text-align: center; margin-top: -20px;">LSI LOGIN PAGE</h5>
            <hr>
            <div class="illustration"><a href="admin-login.php"><img src="assets/img/carigara.png" height="110px;"></i></a></div>
            <div class="error">
            <?php 
            if (isset($_GET["error"])==true) {
                echo "Username/password is incorrect.";
            }
            ?>
            </div>
            <br>
            <div class="form-group"><input class="form-control" type="text" required="" name="username" placeholder="Username" autocomplete="off"></div>
            <div class="form-group"><input class="form-control" type="password" required="" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="forgot" href="signup.php">Doesn't have an account yet? Signup here.</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>