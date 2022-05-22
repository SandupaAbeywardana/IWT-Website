<?php
    session_start();
    require('config.php');
    
    $id=$_SESSION["id"];
    $query = "SELECT * from new_customers where id='".$id."'"; 
    $result = mysqli_query($conn, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Update Profile</title>
    <link rel="stylesheet" href="../CSS/accSettings.css">
    <link rel="shortcut icon" type="Image/jpg" href="../Images/title.jpg">
    
</head>
<body>
    <div class="form">
            <h1>Update Profile</h1>

         <?php
            $status = "";
        
            if(isset($_POST['new']) && $_POST['new']==1)
            {
                $id=$_REQUEST['id'];
                $first_Name=$_REQUEST['fname'];
                $last_Name =$_REQUEST['lname'];
                $email =$_REQUEST['em'];
                $acc_type = $_REQUEST['accType'];
                $password = $_REQUEST['psw'];
                $confirm_password =$_REQUEST['cpsw'];
                $update="UPDATE `new_customers` SET `First_Name`='".$first_Name."',`Last_Name`='".$last_Name."',`Email`='".$email."',`Acc_Type`='".$acc_type."',`Password`='".$password."',`Confirm_Password`='".$confirm_password."' WHERE id='".$id."'";

                mysqli_query($conn, $update) or die(mysqli_error());

                $_SESSION["id"] = $row['id'];
                $_SESSION["Email"]=$email;
                $_SESSION["First_Name"]=$first_Name;
                $_SESSION["Last_Name"]=$last_Name; 
                $_SESSION["Confirm_Password"]=$confirm_password; 
                $_SESSION["Acc_Type"]=$acc_type; 
                $_SESSION["Password"]=$password; 

                $status = "Profile Updated Successfully. </br></br><a href='userprofile.php'>Proceed to Profile</a>";

                echo '<p style="color:green;">'.$status.'</p>';

            }
            else
            {
            ?>

        <div>
            <form name="form" method="post" action=""> 
                <input type="hidden" name="new" value="1" />
                <input name="id" type="hidden" value="<?php echo $_SESSION['id'];?>" />
                <div class="mainbox">

                <div class="regbox">
                    <div class="regbox-container">
                        <div class="sub-regbox">
                            <label>First Name :</label>
                            <input type="text" name="fname" required value="<?php echo $_SESSION["First_Name"] ?>">
                        </div>

                        <div class="sub-regbox">
                            <label>Last Name :</label>
                            <input type="text" name="lname" required value="<?php echo $_SESSION["Last_Name"] ?>">
                        </div>

                        <div class="sub-regbox">
                            <label>Email :</label>
                            <input type="text" name="em" required value="<?php echo $_SESSION["Email"] ?>">
                        </div>

                        <div class="sub-regbox">
                            <label for="accType">Account Type :</label>
                            <select id="accType" name="accType">
                                <option  value="Select">Select</option>
                                <option value="User"> User </option>
                                <option value="Client"> Client </option>
                                <option value="Exporter"> Exporter </option>
                                <option value="Wholesaler"> Wholesaler </option>
                            </select>
                        </div>

                        <div class="sub-regbox">
                            <label>Password :</label>
                            <input type="text" name="psw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" size="46" required onchange="chechPassword();" value="<?php echo $_SESSION["Password"] ?>">
                        </div>

                        <div class="sub-regbox">
                            <label>Confirm Password :</label>
                            <input type="password" name="cpsw" requred  onchange="chechPassword();" value="<?php echo $_SESSION["Confirm_Password"] ?>">
                        </div>

                    </div>
                </div>
            </div>
                
                <p><input name="submit" type="submit" value="Update" /></p>
                <button onclick="deleteAcc()">DELETE ACCOUNT</button>
            </form>
           
            <?php } ?>

        </div>

        
    </div>
    <script type="text/javascript">

    function chechPassword() {
        const password = document.querySelector('input[name=psw]');
        const confirm = document.querySelector('input[name=cpsw]');
        if (confirm.value === password.value) {
        confirm.setCustomValidity('');
        } 
        else {
        confirm.setCustomValidity('Passwords do not match');
        }
    }

    deleteAcc(){
        alert("Are you sure !?");
        window.location.replace("deleteAcc.php");
        
    }

</script>
</body>
</html>
