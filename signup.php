<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Signup</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min1.css">
    <link rel="stylesheet" href="assets/css/registration.css">
</head>
<body style="background: linear-gradient(135deg, #172a74, #21a9af);
  background-color: #184e8e; height: 656px;">
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form action="code.php" method="post">
                <h4 class="text-center"><strong>Create</strong> an account.</h4>
                <p style="text-align: left;"><?php 
                if (isset($_GET["success"])==true) {
                    echo "You are registered successfully.<br/>Click here to <a href='login.php'>Login</a>";
                }
                ?>
                </p>
                <div class="form-group"><input class="form-control" autocomplete="off" required="" type="text" name="username" placeholder="Username"></div>
                <div class="form-group"><input class="form-control" required="" type="email" name="email" placeholder="Email" autocomplete="off"></div>
                <div class="form-group"><input class="form-control" required="" type="password" name="password" placeholder="Password"></div>
                <div class="form-group">
                <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required="">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" name="register" type="submit">Register</button></div><a class="already" href="login.php">You already have an account? Login here.</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>