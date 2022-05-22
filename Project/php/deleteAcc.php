<?php
    session_start();
    require('config.php');
    $id=$_REQUEST['id'];
    $query = "DELETE FROM  new_customers WHERE id=$id"; 
    $result = mysqli_query($conn,$query) or die ( mysqli_error());

    header("Location: ../HTML/login.html"); 
?>