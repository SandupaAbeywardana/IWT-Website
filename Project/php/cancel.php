<?php include'config.php' ?>

<?php

if (isset($_POST['submit'])) { 

        $SQL = "DELETE FROM payment";
        $result = mysqli_query($conn,$SQL) or die ( mysqli_error());

        echo "<script>alert ('Payment Success!')</script>";
        echo('<script>window.location.replace("userprofile.php");</script>');

    }

?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../CSS/cancel.css">
    <title>Cancel Payment</title>
</head>

<body>


    <div class="menu">
        <ul>

            <li>
                <a href="../php/index.php"><img src="../Images/460b145b-2610-4b39-95a9-1df09218c7eb.jpg" class="logo" width="120px" height="100px"></a>
            </li>

            <li><a href="../php/index.php"><b>Home</b></a></li>
            <li><a href="achievements.html"><b>Achievements</b></a></li>
            <li><a href="products.html"><b>Product</b></a></li>
            <li><a href="contact.html"><b>Contact us</b></a></li>
            
        </ul>
    </div>

    <hr>




    <form method="POST" id="payment-form" class="form-horizontal" action="">




        <div class="mainBox">



            <div class=h3><b>Do You Want To?</b></div>


            <div class="formBox">

                <div class="b2">
                    <a href="../edit.php"><input type="button" name="edit" id="edit" value="EDIT PAYMENT"></a> <br>
                    <input type="submit" name="submit" id="confirm" value="CONFIRM PAYMENT "></a>
                </div>

                <div class=p>If you click cancel payment, within 24 hours, your money will be refunded.</div>
            </div>

        </div>


</body>

<section class="footer ">
    <div class="social ">
        <a href="https://www.instagram.com "><img src="../Images/8cf79628-3d0d-47c1-8d01-79212f95cc2b.jpg " class="instagram " width="50px " height="50px "></a>
        <a href="https://www.facebook.com "><img src="../Images/ef7ae984-ca0e-4fb1-8f2b-8de1bf158dde.jpg " class="fb " width="50px " height="50px "></a>
        <a href="https://www.snapchat.com "><img src="../Images/96e2c46c-23e5-42ed-bbd3-3039375003f4.jpg " class="snap " width="50px " height="50px "></a>
        <a href="https://www.twitter.com "><img src="../Images/80fb6791-d773-45dd-b4bd-addd8db5077d.jpg " class="twitter " width="50px " height="50px "></a>
    </div>
    <ul class="list ">
        <li><a href="../php/index.php">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="terms.html">Terms</a></li>
        <li><a href="privacy.html">Privacy & Policy</a></li>
    </ul>
    <p class="copyright ">
        The Chosen One Textile & Garment Management System @ 2022
    </p>
</section>






</html>