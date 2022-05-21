<?php
 
    require('config.php');
    
    $id=$_REQUEST['id'];
    $query = "SELECT * from registration where id='".$id."'"; 
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
                $firstname=$_REQUEST['FirstName'];
                $lastname =$_REQUEST['LastName'];
                $dob =$_REQUEST['DOB'];
                $areacode = $_REQUEST['AreaCode'];
                $phonenumber = $_REQUEST['PhoneNumber'];
                $email =$_REQUEST['Email'];
                $address = $_REQUEST['Address'];
                $vacencies = $_REQUEST['vacancies'];
                $update="UPDATE `registration` SET `FirstName`='".$firstname."',`LastName`='".$lastname."',`DOB`='".$dob."',`AreaCode`='".$areacode."',`PhoneNumber`='".$phonenumber."',`Email`='".$email."',`reg_Address`='".$address."',`vacancies`='".$vacencies."' WHERE id='".$id."'";

                mysqli_query($conn, $update) or die(mysqli_error());

                $status = "Record Updated Successfully. </br></br><a href='careeredit.php'>View Updated Record</a>";

                echo '<p style="color:#FF0000;">'.$status.'</p>';

            }
            else
            {
        ?>

        <div>
            <form name="form" method="post" action=""> 
                <input type="hidden" name="new" value="1" />
                <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                <p><input type="text" name="FirstName" placeholder="Enter First Name" required value="<?php echo $row['FirstName'];?>" /></p>
                <p><input type="text" name="LastName" placeholder="Enter Last Name" required value="<?php echo $row['LastName'];?>" /></p>
                <p><input type="text" name="DOB" placeholder="Enter Month/Date/Year" required value="<?php echo $row['DOB'];?>" /></p>
                <p><input type="text" name="AreaCode" placeholder="Enter Area code" required value="<?php echo $row['AreaCode'];?>" /></p>
                <p><input type="text" name="PhoneNumber" placeholder="Enter Phone Number" required value="<?php echo $row['PhoneNumber'];?>" /></p>
                <p><input type="text" name="Email" placeholder="Enter Email" required value="<?php echo $row['Email'];?>" /></p>
                <p><input type="text" name="Address" placeholder="Enter Street Address" required value="<?php echo $row['reg_Address'];?>"/></p>
                <p><select name="vacancies" placeholder="Enter Vacancy" required/>
                    <option ><?php echo $row['vacancies'];?></option>           
                    <option value="Executive">Executive</option>
                    <option value="Manager">Manager</option>
                    <option value="Knit Specialist">Knit Specialist</option>
                    <option value="Pattern Maker">Pattern Maker</option>
                </select></p>
                
                <p><input name="submit" type="submit" value="Update" /></p>
            </form>

            <?php } ?>

        </div>
    </div>

</body>
</html>
