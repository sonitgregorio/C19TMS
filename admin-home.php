<?php
session_start();
if(!isset($_SESSION["email"])){
header("Location: admin-login.php");
exit(); }
include('includes/header.php'); 
include('includes/navbar.php');
?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50" hidden></i></a>
  </div>
  <!-- Global Situation -->
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                <h4>Global Situation</h4>
              </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
               <h5>Confirm Cases:  89,707,155</h5>
                <div class="progress progress-sm mr-2">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 89%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Death -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                <h4>Deaths</h4>
              </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><h5>1, 940, 352</h5></div>
              <br>
                <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 19%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Confirm Cases -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h4>Philippines Situation</h4></div>
               <div class="h5 mb-0 font-weight-bold text-gray-800">
               <h5>Confirm Cases: 489, 736</h5>
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 48%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Death -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                <h4>Deaths</h4>
              </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><h5>9, 416</h5></div>
              <br>
                <div class="progress progress-sm mr-2">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>               
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Total Registered LSI</h1>
  </div>
      <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2" style="width: 200px;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                <h3></h3>
              </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                require 'config.php';
                $query = "SELECT lsi_id FROM lsi ORDER BY lsi_id";
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h2> '.$row.'</h2>';
                ?>             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
include('includes/scripts.php');
?>