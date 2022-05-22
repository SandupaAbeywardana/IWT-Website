
<?php include_once 'Config.php'; ?>

<?php 

$Card_Holder_Name = $_POST["cName"];
$Credit_Card_Number = $_POST["cNum"];
$Exp_Month = $_POST["month"];
$Exp_Year  = $_POST["year"];
$cvv = $_POST["cvv"];
$Email = $_POST["em"];
   
   

   $SQL = "insert into payment(Card_Holder_Name, Credit_Card_Number ,	Exp_Month, Exp_Year ,cvv , Email)values('$Card_Holder_Name','$Credit_Card_Number','$Exp_Month','$Exp_Year','$cvv','$Email')";
   
   
   if(mysqli_query($conn,$SQL)){
       echo "<script>alert ('Your Data Submited')</script>";
   }
   else{
       echo "<script>alert ('Your Data Not Submited 222')</script>";
   }

   echo  $Card_Holder_Name, $Credit_Card_Number, $Exp_Month, $Exp_Year, $cvv, $Email;
   
   mysqli_close($conn);
   
?>