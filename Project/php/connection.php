<?php
   
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'textile';

    $connection = mysqli_connect('localhost', 'root', '', 'textile');

    if(mysqli_connect_errno())
    {
        die('Database connection failed' .mysqli_connect_error());
    }
    // else{
    //     echo"connection successful";
    // }
   
    ?>