<!DOCTYPE html>
<html>
    <head>
        <title>Textile & Garment Management System</title>
        <link rel="stylesheet" href="../CSS/Style.css">
        <link rel="shortcut icon" type="Image/jpg" href="../Images/title.jpg">
    </head>
    <body>
        <!-- Navigation bar -->
        <div class="menu" style="font-size: 18px;">
            <ul>
                <li><img src="../Images/title.jpg" width="50px" height="50px"></li>
                <li><a href="index.php"><b>Home</b></a></li>
                <li><a href="../HTML/achievements.html"><b>Achievements</b></a></li>
                <li><a href="../HTML/products.html"><b>Product</b></a></li>
                <li id="contactushide"><a href="../HTML/contact.html"><b>Contact us</b></a></li>
                <li id="loginhide"><a href="../HTML/login.html"><b>Log in</b></a></li>
            </ul>
            <ul class="dropdown" id="hideprofile">
                <li><img src="../Images/user.png" width="60px" height="60px" class="dropbtn"></li>

                <?php
                        session_start();
                        $_SESSION["logged"] = 0;
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
                        if (null !== ($_SESSION["id"])) {
                            $id= $_SESSION["id"];
                            $sql=mysqli_query($conn,"SELECT * FROM new_customers where id='$id' ");
                            $row  = mysqli_fetch_array($sql);
                            echo "<script>document.getElementById('loginhide').style.display = 'none';</script>";   
                            echo "<script>document.getElementById('contactushide').style.display = 'block';</script>";                             
                        }
                        else{
                            echo "<script>document.getElementById('loginhide').style.display = 'block';</script>";
                            echo "<script>document.getElementById('hideprofile').style.display = 'none';</script>";
                            echo "<script>document.getElementById('contactushide').style.display = 'none';</script>";
                        }
                ?>
                <div class="dropdown-content">
                    <li id="u1"><a href="../php/userprofile.php" class="drpdwntxt"><?php echo $_SESSION["First_Name"] ?></a></li><br>
                    <li><a href="logout.php" class="drpdwntxt">Sign Out</a></li>
                </div>    
            </ul>    
            
        </div>

        <!-- Paragraph -->
        <hr color="snow" width="800px">
        <div class="c1">
            <br>
            
            <h1>Chosen One</h1>
            <hr color="snow" width="400px">
            <p class="p1" align="left">Since 2018, we are exceptional wear store which includes all the quality men's wear & women's wear 
            for an affordable price, We consistently delight our clients thanks to our consistent approach and outstanding customer service. 
            We've worked hard to establish high goals and keep moving forward at a quick pace. here we go introducing our official website to 
            make our clients easy to shop online. Also this is a business organization which also interact with another business organization. 
            Check out <b>Client, Wholesaler</b> pages for more information. If you are a foreign business owner & if you want to do business
            with us check our <b>Exporter</b> page for more information. And also we hiring some people who is looking for new jobs. Check out
            our new job vacancies by going through our <b>Careers</b> page.Since 2018, we are exceptional wear store which includes all the 
            quality men's wear & women's wear for an affordable price, We consistently delight our clients thanks to our consistent approach and 
            outstanding customer service. We've worked hard to establish high goals and keep moving forward at a quick pace. here we go introducing 
            our official website to make our clients easy to shop online. Also this is a business organization which also interact with another 
            business organization. Check out Client, Wholesaler pages for more information. If you are a foreign business owner & if you want to do 
            business with us check our Exporter page for more information. And also we hiring some people who is looking for new jobs. Check out our 
            new job vacancies by going through our Careers page.</p>
            
        </div>
        <!-- New Arrivals Images -->
        <center>
            <div id="slidediv" align="center">
                <a href="../HTML/newarrivals.html">
                    <img class="imgslider" src="../Images/carousel-1.jpg">
                    <img class="imgslider" src="../Images/carousel-2.jpg">
                    <img class="imgslider" src="../Images/carousel-3.jpg">
                    <img class="imgslider" src="../Images/carousel-4.jpg">
                </a>    
            </div>
        </center>
        <hr color="#006666">

        <!-- Marquee Animation-->
        <marquee><b>THE CHOSEN ONE - TEXTILE</b></marquee>
        <hr color="#006666">
        <br>

        <!-- User Cards for Customer, Business & Careers-->
        <div class="card">
                <div class="content">
                    <a href="../HTML/Customer.html" class="cardlnk">
                    <img src="../Images/shop.jpg" width="200px" height="200px" alt="Customer Page" class="img">
                    <h3 class="heading">Customer</h3>
                    <p>The Chosen One is an exceptional wear to mens, womens and kids too since this company has started.</p>
                    <button id="customer">Search more</button>
                    </a>
                </div>

                       
                <div class="content">
                    <a href="../HTML/Business.html" class="cardlnk"> 
                    <img src="../Images/client.jpg" width="200px" height="200px" alt="Business Page" class="img">
                    <h3 class="heading">Business</h3>
                    <p>This is a business organization which also interact with another business organization.</p>
                    <button id="business">Search more</button>
                    </a>
                </div>
            
            
            
                <div class="content">
                    <a href="../HTML/career.html" class="cardlnk">
                    <img src="../Images/career.jpg" width="200px" height="200px" alt="Career Page" class="img">
                    <h3 class="heading">Careers</h3>
                    <p>We hiring some people who is looking for new jobs. Check out our new job vacancies.</p>
                    <button id="career">Search more</button>
                    </a>
                </div>
            
        </div>
        
        <!-- Footer -->
        <section class="footer">
            <div class="social">
                <a href="https://www.instagram.com"><img src="../Images/insta.jpg" class="instagram" width="50px" height="50px"></a>
                <a href="https://www.facebook.com"><img src="../Images/fb.png" class="fb" width="50px" height="50px"></a>
                <a href="https://www.snapchat.com"><img src="../Images/snap.jpg" class="snap" width="50px" height="50px"></a>
                <a href="https://www.twitter.com"><img src="../Images/twitter.png" class="twitter" width="50px" height="50px"></a>
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
        <script type="text/javascript">
            var myIndex=0;
                myFunction();
                
                function myFunction(){
                    var i;
                    var x = document.getElementsByClassName("imgslider");
                    for(i=0;i < x.length;i++){
                        x[i].style.display="none";
                        }
                    myIndex++;
                    if(myIndex > x.length){
                        myIndex=1;
                        }
                    x[myIndex-1].style.display="block"; 
                    setTimeout(myFunction,2500);
                }
        </script>        
    </body>
</html>