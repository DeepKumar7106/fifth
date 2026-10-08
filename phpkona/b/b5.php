<?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "login_db");

    if(!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) ==  1) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        } else {
            $error = "Invalid username or password";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login form</h2>
    <form method="post" action="">
    	username: <input type="text" name="username" required="required"/> <br />

    	password: <input type="password" name="password" required="required"/> <br />

        <input type="submit" value="Login" />
    </form>
    <?php 
		if(isset($error)) {
			echo "<p style='color:red'>$error</p>"; 		
		}
	?>
</body>
</html>