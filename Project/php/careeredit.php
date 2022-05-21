<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/careeredit.css">
    <title>Document</title>
    <style type="text/css">
        td{
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="career-edit">
        <h1>Admin Page</h1>
        <div class="messageListTable">
            <table width='90%' border= 1 style="background-color:rgba(255, 255, 255,0.6);">
            <tr><th colspan ="10" align = "center" style="background-color:rgba(0, 0, 255, 0.3);"><h2>Career Registration details</h2></th></tr>
                <th>First Name </th>
                <th>Last Name</th>
                <th>DOB</th>
                <th>Area code</th> 
                <th>Phone Number</th>
                <th>Email</th>
                <th>Address</th> 
                <th>Vacency</th>
                </tr>

                <?php 
                    require 'config.php';

                        $query = " SELECT * FROM registration";
                        $sql= mysqli_query($conn,$query) or die ('error getting');
                    
                        while($row=mysqli_fetch_array($sql)){ 
                ?>
           
                <tr>
                    <td>
                    <?php echo $row['FirstName']; ?></td>
                    <td>
                    <?php echo $row['LastName']; ?></td>
                    <td>
                    <?php echo $row['DOB']; ?></td>
                    <td>
                    <?php echo $row['AreaCode']; ?></td>
                    <td>
                    <?php echo $row['PhoneNumber']; ?></td>
                    <td>
                    <?php echo $row['Email']; ?></td>
                    <td>
                    <?php echo $row['reg_Address']; ?></td>
                    <td>
                    <?php echo $row['vacancies']; ?></td>
                    
                    <?php   
                        echo "<td> <a href=\"admin_delete_career.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete
                        </a></td>"; 
                    ?>
                    <?php   
                        echo "<td> <a href=\"update_career.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to Update?')\">Update
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