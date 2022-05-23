<?php

    require('config.php');

    $id=$_REQUEST['id'];
    $query = "DELETE FROM  contactus WHERE id=$id"; 
    $result = mysqli_query($conn,$query) or die ( mysqli_error());

    header("Location: ../HTML/contact.html"); 
?>