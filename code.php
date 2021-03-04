<?php
include('security.php');

//INSERT DATA LSI FORM
if(isset($_POST['add_data']))
{
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $address = $_REQUEST['address'];
    $birthdate = $_REQUEST['birthday'];
    $citizenship = $_REQUEST['citizenship'];
    $mobile_number = $_REQUEST['number'];
    $place_from = $_REQUEST['place-from'];
    $date_of_arrival = $_REQUEST['date-arrival'];    
    $account_id = $_REQUEST['id'];

    $query = "INSERT INTO lsi (name,age,address,birthdate,citizenship,mobile_number,place_from,date_of_arrival,account_id) VALUES ('$name','$age','$address','$birthdate','$citizenship','$mobile_number','$place_from','$date_of_arrival','$account_id')";
    $query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
        header('Location: lsi-home.php'); 
    }
    else 
    {
        header('Location: signup.php?failed=1');  
    }
}

//ADD ACCOUNT
if(isset($_POST['register']))
{
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];   

    $query = "INSERT INTO admin_register (username,email,password) VALUES ('$username','$email','$password')";
    $query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
        header('Location: signup.php?success=1');
    }
    else 
    {
        header('Location: signup.php?failed=1');  
    }
}


//INSERT DATA
if(isset($_POST['lsi']))
{   
    
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $address = $_REQUEST['address'];
    $birthdate = $_REQUEST['birthday'];
    $citizenship = $_REQUEST['citizenship'];
    $mobile_number = $_REQUEST['number'];
    $place_from = $_REQUEST['place-from'];
    $date_of_arrival = $_REQUEST['date-arrival'];
    $account = 1;  

    $query = "INSERT INTO lsi (name,age,address,birthdate,citizenship,mobile_number,place_from,date_of_arrival,account_id) VALUES ('$name','$age','$address','$birthdate','$citizenship','$mobile_number','$place_from','$date_of_arrival','$account')";
    $query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
        header('Location: register.php?success=1');
    }
    else 
    {
        header('Location: register.php?failed=1');  
    }
}


//UPDATE LSI DATA/ INFO
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $age = $_POST['edit_age'];
    $address = $_POST['edit_address'];
    $birthdate = $_POST['edit_birthday'];
    $citizenship = $_POST['edit_citizenship'];
    $mobile_number = $_POST['edit_number'];
    $place_from = $_POST['edit_place-from'];
    $date_of_arrival = $_POST['edit_date-arrival'];
    $status = $_POST['edit_status'];

    $query = "UPDATE lsi SET lsi_id='$id', name='$name', age='$age', address='$address', birthdate='$birthdate', citizenship='$citizenship', mobile_number='$mobile_number', place_from='$place_from', date_of_arrival='$date_of_arrival', status='$status' WHERE lsi_id='$id' ";
    $query_run = mysqli_query($connection, $query);    

    if($query_run)
    {
        header('Location: register.php?success=1'); 
    }
    else
    {
        header('Location: register.php?error=1'); 
    }
}


//DELETE DATA
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM lsi WHERE lsi_id='$id' ";
    $query_run = mysqli_query($connection, $query); 
        if($query_run)
    {
        header('Location: register.php?delete=1'); 
    }
    else
    {
        header('Location: register.php?failed=1'); 
    }
}


//UPDATE ACCOUNT
if(isset($_POST['updateaccount']))
{
    $id = $_POST['edit_id'];
    $email = $_POST['edit_email'];
    $username = $_POST['edit_username'];
    $password = $_POST['edit_password'];

    $query = "UPDATE admin_register SET account_id='$id', email='$email', username='$username', password='$password' WHERE account_id='$id' ";
    $query_run = mysqli_query($connection, $query);    

    if($query_run)
    {
        header('Location: admin.php?success=1'); 
    }
    else
    {
        header('Location: admin.php?failed=1'); 
    }
}

//DELETE ACCOUNT
if(isset($_POST['delete_account']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM admin_register WHERE account_id='$id' ";
    $query_run = mysqli_query($connection, $query); 
        if($query_run)
    {
        header('Location: admin.php?delete=1'); 
    }
    else
    {
        header('Location: admin.php?failed=1'); 
    }
}
?>