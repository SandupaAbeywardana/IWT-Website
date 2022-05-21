<?php include_once 'config.php'; ?>
<?php
    $Firstname = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $BOD = $_POST['BOD'];
    $AreaCode = $_POST['AreaCode'];
    $PhoneNumber= $_POST['PhoneNumber'];
    $Email = $_POST['Email'];
    $Address = $_POST['Address'];
    $vacancies = $_POST['vacancies'];

    //Database connection
    $conn = new mysqli('localhost','root','','career');
   if($conn->connect_error){
       die('Connection Failed : '.$conn->connect_error);   
   }
   else{
       $stmt = $conn->prepare("insert into registration(FirstName, LastName,BOD,AreaCode,PhoneNumber,Email,Address,vacancies)values(?,?,?,?,?,?,?,?)");
       $stmt->bind_param($FirstName, $LastName, $BOD, $AreaCode, $PhoneNumber, $Email, $Address, $vacancies);
       $stmt->execute();
       echo"registration successfull.....!";
       $stmt->close();
       $conn->close();
   }

    
    
    








?>