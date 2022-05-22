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

    $sql=mysqli_query($conn,"SELECT * FROM new_customers where email='$email' and Password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["First_Name"]=$row['First_Name'];
        $_SESSION["Last_Name"]=$row['Last_Name']; 
        header("Location: ../HTML/userprofile.html"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}

?>