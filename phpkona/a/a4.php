<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Age Calculator</title>
</head>
	<h2>Age Calculator</h2>
    <form method="post" action="">
    	Enter your birth data:
        <input type="date" name="birthdate" required="required"/>
        <input type="submit" name="submit" />
    </form>
    <?php 
		if(isset($_POST['submit'])) {
			$birthdate = $_POST['birthdate'];
			$today = date("y-m-d");
			$birthObj = new DateTime($birthdate);
			$todayObj = new DateTime($today);
			$age = $birthObj -> diff($todayObj);
			
			echo "<h3>Your age is {$age->y} years {$age->m} months and {$age->d} days</h3>";
		}
	?>
<body>
</body>
</html>