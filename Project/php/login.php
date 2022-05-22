<?php

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "textile";

// Create connection

session_start();
if(isset($_POST['save']))
{
    extract($_POST);

    include 'config.php';

    $email=$_POST['email']; 
    $password=$_POST['password'];

    $sql=mysqli_query($conn,"SELECT * FROM new_customers where Email='$email' and Password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["First_Name"]=$row['First_Name'];
        $_SESSION["Last_Name"]=$row['Last_Name']; 
        $_SESSION["Confirm_Password"]=$row['Confirm_Password']; 
        $_SESSION["Acc_Type"]=$row['Acc_Type']; 
        $_SESSION["Password"]=$row['Password']; 
        header("Location: userprofile.php"); 
    }
    else
    {
        echo "<script>alert ('Invalid Email ID/Password')</script>";
        echo('<script>window.location.replace("../HTML/login.html");</script>');
    }
}

?>