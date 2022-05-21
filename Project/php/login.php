<?php

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "textile";

// Create connection

$errors = [];

      $connection=mysqli_connect("localhost","root","","textile");
	  
	  if ($connection==false)  
	    {
      die("Connection failed: ". mysqli_connect_error());
	    }
        
       $email=$_POST['email']; 
       $password=$_POST['password'];


if (count($errors) === 0) {
        $query = "SELECT * FROM new_customers WHERE Email=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $username, $password);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) { // if password matches
                $stmt->close();

                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['verified'] = $user['verified'];
                $_SESSION['message'] = 'You are logged in!';
                $_SESSION['type'] = 'alert-success';
                header('location: index.php');
                exit(0);
            } else { // if password does not match
                $errors['login_fail'] = "Wrong username / password";
            }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }
}
		mysqli_close($connection);


?>