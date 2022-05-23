<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/adminPage.css">
    <title>Document</title>
</head>
<body>
    <div class="admin-page">
        <div class="title-admin-page">
            <h1>Admin Page</h1>
        </div>
        <div class="messageListTable">
            <table width='80%' border= 1 style="background-color:rgba(255, 255, 255,0.6);">
            <tr><th colspan ="9" align = "center" style="background-color:rgba(0, 0, 255, 0.3);"><h2>Message List</h2></th></tr>
                <th>First Name </th>
                <th>Email</th>
                <th>Country</th>
                <th>Phone Number</th> 
                <th>Message</th>
                </tr>

                <?php 
                    require 'config.php';

                        $query = " SELECT * FROM contactus";
                        $sql= mysqli_query($conn,$query) or die ('error getting');
                    
                        while($row=mysqli_fetch_array($sql)){ 
                ?>
           
                <tr>
                    <td>
                    <?php echo $row['FIRST_NAME']; ?></td>
                    <td>
                    <?php echo $row['EMAIL']; ?></td>
                    <td>
                    <?php echo $row['COUNTRY']; ?></td>
                    <td>
                    <?php echo $row['PHONE_NUMBER']; ?></td>
                    <td>
                    <?php echo $row['MESSAGE']; ?></td>
                    
                    <?php   
                        echo "<td> <a href=\"admin_delete_msg.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete
                        </a></td>"; 
                    ?>
                    <?php   
                        echo "<td> <a href=\"update_message.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to Update?')\">Update
                        </a></td></tr>"; 
                    ?>
                </tr>
                <?php   
                    }
                ?>    
            </table>
        </div>
    </div>
</body>
</html>