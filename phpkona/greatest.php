<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Greatest of Three</title>
</head>

<body>
	<form method="post">
    	<label>Enter first number: </label>
        <input type="number" name="a" />
	   	<label>Enter second number: </label>
        <input type="number" name="b" />
	   	<label>Enter third number: </label>
        <input type="number" name="c" />

		<input type="submit" value="Find Greatest"/>    
    </form>
<?php
	if (isset($_POST["a"]) && isset($_POST["b"])) {
		$a = $_POST["a"];	
		$b = $_POST["b"];	
		$c = $_POST["c"];	

	
		if ($a > $b && $a > $c) {
			echo "<p>$a is greatest</p>";
		} else if ($b > $a && $b > $c) {
			echo "<p>$b is greatest</p>";
		} else {
			echo "<p>$c is greatest</p>";
		}
	
	}
?>
</body>

</html>