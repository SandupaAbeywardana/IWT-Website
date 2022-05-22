<?php include'./php/config.php' ?>

<?php
if (isset($_GET['mail'])) {
    $mail  = $_GET['mail'];
    $SQL = "SELECT * FROM payment WHERE Email = '$mail'";
    $result = mysqli_query($conn,$SQL);

    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Card_Holder_Name          = $row['Card_Holder_Name'];
            $Credit_Card_Number        = $row['Credit_Card_Number'];
            $Exp_Month                 = $row['Exp_Month'];
            $Exp_Year                  = $row['Exp_Year'];
            $cvv                       = $row['cvv'];
            $Email                     = $row['Email'];
        }
    }

    
}
if (isset($_POST['submit'])) { 

    
    $SQL = "DELETE FROM payment WHERE Email='$Email '";



    if(mysqli_query($conn,$SQL)){
        echo "<script>alert ('Your Payment Data Deleted')</script>";
        echo('<script>window.location.replace("pay.php");</script>');

    }
    else{
        echo "<script>alert ('Your Data Not Submited')</script>";
    }
    

}

    mysqli_close($conn);
    
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="CSS/view.css">
</head>

<body>
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




    <form method="POST" id="payment-form" class="form-horizontal">



        <form action="" method="">

            <div class="mainBox">



                <div class=h3>PAYMENT DETAILS</div>


                <div class="formBox">
                    

                    &nbsp
                    <lable for="cName"> </lable><b>Card Holder Name -</b> <input type="text" value="<?php echo $Card_Holder_Name  ?>" size="30" id="cName" name="cName" readonly> </lable> <br>
                    <lable for="cNum"> </lable><b>Credit Card Number -</b> <input type="text" value="<?php echo $Credit_Card_Number  ?>" size="30" id="cNum" name="cNum" readonly> </lable> <br>


                    <lable for="month" name="month"> <b>Exp Month -</b>
                        <input type="text" value="<?php echo $Exp_Month   ?>"  id="month" name="month" size="10" readonly> </lable>

                    &nbsp &nbsp &nbsp &nbsp &nbsp

                    <lable for="year" name="year"> <b>  Exp Year -</b>
                        <input type="text" value="<?php echo $Exp_Year   ?>" id="month" name="month" size="10" readonly> </lable>
                    <br> &nbsp &nbsp

                    <lable for="month"> </lable><b>cvv -</b> <input value="<?php echo $cvv ?>" type="text" size="10" id="cvv" name="cvv" readonly> <br> </lable>


                    <b>Email Address -</b>
                    <input type="email" id="em"  value="<?php echo $Email ?>"  name="em" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" size="30" readonly><br>
                    <br><br>


                    <div class="b2">
                        <input type="submit" name="submit" id="confirm" value="DELETE PAYMENT DETAILS">
                       <a href="php/cancel.php"> <input type="button" name="button" id="confirm" value="CONFIRM PAYMENT DETAILS"></a>

                    </div>


                </div>



            </div>


        </form>

        <section class="footer ">
            <div class="social ">
                <a href="https://www.instagram.com "><img src="Images/8cf79628-3d0d-47c1-8d01-79212f95cc2b.jpg " class="instagram " width="50px " height="50px "></a>
                <a href="https://www.facebook.com "><img src="Images/ef7ae984-ca0e-4fb1-8f2b-8de1bf158dde.jpg " class="fb " width="50px " height="50px "></a>
                <a href="https://www.snapchat.com "><img src="Images/96e2c46c-23e5-42ed-bbd3-3039375003f4.jpg " class="snap " width="50px " height="50px "></a>
                <a href="https://www.twitter.com "><img src="Images/80fb6791-d773-45dd-b4bd-addd8db5077d.jpg " class="twitter " width="50px " height="50px "></a>
            </div>
            <ul class="list ">
                <li><a href="php/index.php">Home</a></li>
                <li><a href="HTML/about.html">About</a></li>
                <li><a href="HTML/terms.html">Terms</a></li>
                <li><a href="HTML/privacy.html">Privacy & Policy</a></li>
            </ul>
            <p class="copyright ">
                The Chosen One Textile & Garment Management System @ 2022
            </p>
        </section>


</body>

</html>