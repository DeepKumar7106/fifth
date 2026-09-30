<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome</title>
</head>
<?php 
	session_start();
	if(!isset($_SESSION['username'])) {
		header("Location: login.php");
		exit();
	}
	if(isset($_GET['logout'])) {
		session_destroy();
		header("Location: a3.php");
		exit();
	}
?>

<body>
<h2>Welcome <?php echo $_SESSION['username'];?></h2>
<p>This is a secure area. You are logged in! :)</p>
<a href="welcome.php?logout=true">Logout</a>
</body>
</html>