<?php

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "textile";

// Create connection

      $connection=mysqli_connect("localhost","root","","textile");
	  
	  if ($connection==false)  
	    {
      die("Connection failed: ". mysqli_connect_error());
	    }
        
       $comment=$_POST['description']; 


   $sql = "INSERT INTO comment(description)
   VALUES ('$comment')";



if (mysqli_query($connection,$sql)) 
{
  echo "<script>alert ('Comment Submitted Successfully!')</script>";
  echo('<script>window.location.replace("userprofile.php");</script>');
} 
else 
{
  echo "Error : ". mysqli_error($connection);
}

		mysqli_close($connection);


?>