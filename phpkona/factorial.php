<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<form method="post">
    	<label>Enter </label>
        <input type="number" name="number" />
		<input type="submit"/>    
    </form>
    <?php
		if(isset($_POST["number"])) {
			$number = $_POST["number"];
			$numout = $number;
			$fact = 1;
			while ($number >= 2) {
				$fact = $fact * $number;
				$number = $number - 1;
			}

			echo "<h1>Factorial = $fact</h1>";
		}
	?>
</body>
</html>