<?php
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["name"]);
    $SESSION["logged"] = 0;
    header("Location:../HTML/login.html");
?>