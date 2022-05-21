<?php 
    include_once('connection.php');
    	                
    	                    $Firstname = $_POST['FirstName'];
                            $LastName = $_POST['LastName'];
                            $DOB = $_POST['DOB'];
                            $AreaCode = $_POST['AreaCode'];
                            $PhoneNumber= $_POST['PhoneNumber'];
                            $Email = $_POST['Email'];
                            $ad = $_POST['Address'] ;
                            $reg_Address = "";
                            foreach($ad as $add){
                               $reg_Address .= $add;
                               $reg_Address .= " ";

                            }

                            $vacancies = $_POST['vacancies'];

    	                    $sql_auth = "INSERT INTO registration(FirstName,LastName,DOB,AreaCode,PhoneNumber,Email,reg_Address,vacancies) VALUES ('{$Firstname}', '{$LastName}', '{$DOB}', '{$AreaCode}', '{$PhoneNumber}', '{$Email}', '{$reg_Address}','{ $vacancies}')";

                            $result_auth = mysqli_query($connection, $sql_auth);   

                                           
                            if($result_auth!=0)
                            {
                                echo "<script type='text/javascript'>alert ('Your Data Submited')</script>";
                                echo('<script>window.location.replace("http://localhost/Textile/src/php/careeredit.php");</script>');
                            }
                            else
                            {
                                echo $resul_auth ;
                                echo "<script type='text/javascript'>alert('database query failed please check data you enter.')</script>";
                            }
    	                
                    ?>

       
      