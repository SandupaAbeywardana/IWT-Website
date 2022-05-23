<?php
    session_start();
    $_SESSION["id"] = NULL;
    unset($_SESSION["First_Name"]);
    unset($_SESSION["Email"]);
    unset($_SESSION["Last_Name"]);
    unset($_SESSION["Confirm_Password"]);
    unset($_SESSION["Acc_Type"]);
    unset($_SESSION["Password"]);
    header("Location:../HTML/login.html");
?>