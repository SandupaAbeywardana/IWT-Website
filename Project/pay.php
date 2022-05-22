<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="CSS/pay.css">








    <div class="menu">
        <ul>

            <li>
                <a href="php/index.php"><img src="Images/460b145b-2610-4b39-95a9-1df09218c7eb.jpg" class="logo" width="120px" height="100px"></a>
            </li>




            <li><a href="php/index.php"><b>Home</b></a></li>
            <li><a href="HTML/achievements.html"><b>Achievements</b></a></li>
            <li><a href="HTML/achievements.html"><b>Product</b></a></li>
            <li><a href="HTML/achievements.html"><b>Contact us</b></a></li>

        </ul>
    </div>
    <hr>




</head>

<body>



<div>
    <form method="POST" id="payment-form" class="form-horizontal">




        <div class="mainBox">



            <div class=h3>PAYMENT DETAILS</div>


            <div class="formBox">

                &nbsp
                <lable for="cName"> </lable><b>Card Holder Name -</b> <input type="text" size="30" id="cName" name="cName" placeholder="John More Doe" required> </lable> <br>
                <lable for="cNum"> </lable><b>Credit Card Number -</b> <input type="text" size="30" id="cNum" name="cNum" placeholder="1111-2222-3333-4444" required> </lable> <br>


                <lable for="month" name="month"> <b>Exp Month -</b>
                    <input type="text" id="month" name="month" size="10" placeholder="11" required> </lable>

                &nbsp &nbsp &nbsp &nbsp &nbsp

                <lable for="year" name="year"> <b>  Exp Year -</b>
                    <input type="text" id="month" name="year" size="10" placeholder="2011" required> </lable>
                <br> &nbsp &nbsp

                <lable for="month"> </lable><b>cvv -</b> <input type="text" size="10" id="cvv" name="cvv" placeholder="123" required> <br> </lable>


                <b>Email Address -</b>
                <input type="email" id="em" name="em" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" size="30" placeholder="info@gmail.com" required><br>
                <br><br>


            </div>

            <a href=""><img src="Images/payimg.png" class="crd" width="130px" height="23px"></a> <br>

            <input type="submit" name="submit" value="Submit Card Details" id="submit-btn" class="btn">
            

        </div>






        </div>
        </form>

        <div>
         <p id="pay-msg">
            <?php include'php/config.php' ?>

            <?php
                                        
                                            if (isset($_POST['submit'])) { 

                                                $Card_Holder_Name = $_POST["cName"];
                                                $Credit_Card_Number = $_POST["cNum"];
                                                $Exp_Month = $_POST["month"];
                                                $Exp_Year  = $_POST["year"];
                                                $cvv = $_POST["cvv"];
                                                $Email = $_POST["em"];
                                                
                                                $SQL = "insert into payment(Card_Holder_Name, Credit_Card_Number ,	Exp_Month, Exp_Year ,cvv , Email)values('$Card_Holder_Name','$Credit_Card_Number','$Exp_Month','$Exp_Year','$cvv','$Email')";
   
   
                                                if(mysqli_query($conn,$SQL)){
                                                    echo '<script type="text/javascript">
                                                                document.getElementById("pay-msg").style.display = "block";
                                                                document.getElementById("payment-form").style.display = "none";
                                                                document.getElementById("pay-msg").innerHTML = "Your payment details has been successfully sent.";
                                                              </script>';

                                                    echo '<script type="text/javascript">
                                                            window.location.replace("/view.php?"{$Email});
                                                          },1000)
                                                          </script>';
                                                }
                                                else{
                                                    echo "<script>alert ('Your Data Not Submited')</script>";
                                                }
                                                
                                                mysqli_close($conn);
                                                
                                            
                                            }
                                        ?>

        </p>

        </div>



        <div class="c1">
             <a href="view.php?mail=<?php echo $Email ?>"><input id="next-btn"  value="Proceed to Payment" class="btn"></a>
        </div>
        
     </div>






    <section class="footer">
        <div class="social">
            <a href="https://www.instagram.com"><img src="Images/8cf79628-3d0d-47c1-8d01-79212f95cc2b.jpg" class="instagram" width="50px" height="50px"></a>
            <a href="https://www.facebook.com"><img src="Images/ef7ae984-ca0e-4fb1-8f2b-8de1bf158dde.jpg" class="fb" width="50px" height="50px"></a>
            <a href="https://www.snapchat.com"><img src="Images/96e2c46c-23e5-42ed-bbd3-3039375003f4.jpg" class="snap" width="50px" height="50px"></a>
            <a href="https://www.twitter.com"><img src="Images/80fb6791-d773-45dd-b4bd-addd8db5077d.jpg" class="twitter" width="50px" height="50px"></a>
        </div>
        <ul class="list">
            <li><a href="php/index.php">Home</a></li>
                <li><a href="HTML/about.html">About</a></li>
                <li><a href="HTML/terms.html">Terms</a></li>
                <li><a href="HTML/privacy.html">Privacy & Policy</a></li>
        </ul>
        <p class="copyright">
            The Chosen One Textile & Garment Management System @ 2022
        </p>
    </section>





</body>

</html>