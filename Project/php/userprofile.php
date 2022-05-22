<!DOCTYPE html>
<html>

<head>
    <title>user profile</title>
    <link rel="stylesheet" href="../CSS/userprofile.css">
    <link rel="shortcut icon" type="Image/jpg" href="../Images/title.jpg">
</head>

<body>

    <div class="menu">
        <ul>
            <li><a href="index.php"><b>Home</b></a></li>
            <li><a href="../HTML/achievements.html"><b>Achievements</b></a></li>
            <li><a href="../HTML/products.html"><b>Product</b></a></li>
            <li><a href="../HTML/contact.html"><b>Contact us</b></a></li>
            <li id="loginhide"><a href="../HTML/login.html"><b>Log in</b></a></li>
        </ul>
    </div>

    <div id="topCenter">
        <p>User Profile </p>
        <img src="../Images/logo.jpeg" width="50px" height="50px">
        <p id="p2"><b>My profile</b></p>
    </div>
    <div class="user">
        <p> <img src="../Images/user.png" width="60px" height="60px"></p>

        <?php
                session_start();

                $servername ="localhost"; 
                $username = "root"; 
                $password = ""; 
                $db = "textile";

                // Create connection 
                $conn = new mysqli($servername, $username, $password,$db); 

                // Check connection 
                    if ($conn->connect_error){ 
                        die("Connection failed: " . $conn->connect_error); 
                    }

                $id= $_SESSION["id"];
                $sql=mysqli_query($conn,"SELECT * FROM new_customers where id='$id' ");
                $row  = mysqli_fetch_array($sql);

                if(is_array($row)){
                    echo "<script>document.getElementById('loginhide').style.display = 'none';</script>";
                }
        ?>

        <p id="u1"><?php echo $_SESSION["First_Name"] ?>&nbsp&nbsp<?php echo $_SESSION["Last_Name"] ?></p>
        <p id="u2"><?php echo $_SESSION["Email"] ?></p>
    </div>

    <div class="r1">
        <p><a href="#">My orders</a></p>
        <p><a href="#">Account Settings</a></p>
        <p><a href="logout.php">Sign Out</a></p>

    </div>



    <section class="footer">
        <div class="social">
            <a href="https://www.instagram.com"><img src="../Images/instagram.jpeg" class="instagram" width="50px" height="50px"></a>
            <a href="https://www.facebook.com"><img src="../Images/facebook.jpeg" class="fb" width="50px" height="50px"></a>
            <a href="https://www.snapchat.com"><img src="../Images/snapchat.jpeg" class="snap" width="50px" height="50px"></a>
            <a href="https://www.twitter.com"><img src="../Images/twitter.jpeg" class="twitter" width="50px" height="50px"></a>
        </div>
        <ul class="list">
                <li><a href="index.php">Home</a></li>
                <li><a href="../HTML/about.html">About</a></li>
                <li><a href="../HTML/terms.html">Terms</a></li>
                <li><a href="../HTML/privacy.html">Privacy & Policy</a></li>
        </ul>
        <p class="copyright">
            The Chosen One Textile & Garment Management System @ 2022
        </p>
    </section>

</body>

</html>