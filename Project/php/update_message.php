<?php
 
    require('config.php');
    
    $id=$_REQUEST['id'];
    $query = "SELECT * from contactus where id='".$id."'"; 
    $result = mysqli_query($conn, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Update Record</title>
    
</head>
<body>
    <div class="form">
            <h1>Update Record</h1>

        <?php
            $status = "";
        
            if(isset($_POST['new']) && $_POST['new']==1)
            {
                $id=$_REQUEST['id'];
                $firstname=$_REQUEST['firstname'];
                $email =$_REQUEST['email'];
                $country =$_REQUEST['country'];
                $phonenumber = $_REQUEST['phonenumber'];
                $message = $_REQUEST['message'];
                $update="UPDATE `contactus` SET `FIRST_NAME`='".$firstname."',`EMAIL`='".$email."',`COUNTRY`='".$country."',`PHONE_NUMBER`='".$phonenumber."',`MESSAGE`='".$message."' WHERE id='".$id."'";

                mysqli_query($conn, $update) or die(mysqli_error());

                $status = "Record Updated Successfully. </br></br><a href='admin_contactUsPage.php'>View Updated Record</a>";

                echo '<p style="color:#FF0000;">'.$status.'</p>';

            }
            else
            {
        ?>

        <div>
            <form name="form" method="post" action=""> 
                <input type="hidden" name="new" value="1" />
                <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                <p><input type="text" name="firstname" placeholder="Enter First Name" required value="<?php echo $row['FIRST_NAME'];?>" /></p>
                <p><input type="text" name="email" placeholder="Enter Email" required value="<?php echo $row['EMAIL'];?>" /></p>
                <p><input type="text" name="country" placeholder="Enter Country" required value="<?php echo $row['COUNTRY'];?>" /></p>
                <p><input type="text" name="phonenumber" placeholder="Enter Phone number" required value="<?php echo $row['PHONE_NUMBER'];?>" /></p>
                <p><input type="text" name="message" placeholder="Enter Message" required value="<?php echo $row['MESSAGE'];?>" /></p>
                <p><input name="submit" type="submit" value="Update" /></p>
            </form>

            <?php } ?>

        </div>
    </div>

</body>
</html>
