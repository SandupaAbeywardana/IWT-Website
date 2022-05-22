<?php include_once 'config.php'; ?>

<?php
                                        
                                        if (isset($_POST['submit'])) { 

                                            $Card_Holder_Name_submit = $_POST["cName"];
                                            $Credit_Card_Number_submit = $_POST["cNum"];
                                            $Exp_Month_submit = $_POST["month"];
                                            $Exp_Year_submit  = $_POST["year"];
                                            $cvv_submit = $_POST["cvv"];
                                            $Email_submit = $_POST["em"];

                                            echo $Email_submit;
                                            
                                            $SQL = "UPDATE payment SET Card_Holder_Name = '$Card_Holder_Name_submit',	Exp_Month='$Exp_Month_submit', Exp_Year='$Exp_Year_submit' ,cvv='$cvv_submit' , Email='$Email_submit' WHERE Credit_Card_Number='$Credit_Card_Number_submit' ";

                                            if(mysqli_query($conn,$SQL)){
                                                echo "<script>alert ('Your Data  Submited')</script>"
                                            }
                                            else{
                                                echo "<script>alert ('Your Data Not Submited')</script>";
                                            }
                                            
                                            mysqli_close($conn);
                                            
                                        
                                        }
                                    ?>