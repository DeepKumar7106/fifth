<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Greatest of Two</title>
</head>

<body>
	<form method="post">
    	<label>Enter first number: </label>
        <input type="number" name="a" />
	   	<label>Enter second number: </label>
        <input type="number" name="b" />

		<input type="submit" value="Check"/>    
    </form>
<?php
	
	if (isset($_POST["a"]) && isset($_POST["b"])) {
		$a = $_POST["a"];	
		$b = $_POST["b"];	
		
		if ($a > $b) {
			echo "<p>$a is greater than $b</p>";
		} else {
			echo "<p>$b is greater than $a</p>";
		}
	}
?>
</body>

</html>