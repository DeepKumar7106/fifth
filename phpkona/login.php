	
<?php
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
		if($username == "user2" && $password == "pass123") {
			$_SESSION['username'] = $username;
			header("Location: welcome.php");
			exit();
		} else {
			$error = "Invalid username or password:|";		
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>

</head>
	<h2>Login</h2>
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
<body>
</body>
</html>