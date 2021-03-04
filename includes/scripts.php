  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>


  <?php


$connection = mysqli_connect("localhost","root","","db_lsi");

if(isset($_POST['lsi']))
{
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $address = $_REQUEST['address'];
    $birthdate = $_REQUEST['birthday'];
    $citizenship = $_REQUEST['citizenship'];
    $mobile_number = $_REQUEST['number'];
    $place_from = $_REQUEST['place-from'];
    $date_of_arrival = $_REQUEST['date-arrival'];
    $status = $_REQUEST['status'];

    {
    $query = "INSERT INTO `lsi`(`id`, `name`, `age`, `address`, `birthdate`, `citizenship`, `mobile_number`, `place_from`, `date_of_arrival`, `status`) VALUES ('$id','$name','$age','$address','$birthdate','$citizenship','$mobile_number','$place_from','$date_of_arrival','$status')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: personal-info.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: personal-info.php');
        }
    }
}

?>