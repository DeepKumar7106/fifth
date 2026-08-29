<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Armstrong Number</title>
</head>

<body>
<h2>Armstrong Number</h2>
    <form method="post" action="">
    	Enter a number:
        <input type="text" name="number" required="required"/>
        <input type="submit" name="submit" />
    </form>
    <?php 
		if(isset($_POST['submit'])) {
			$num = $_POST['number'];
			if (!ctype_digit($num) || $num < 1) {
				echo "<p style='color:red;'>Enter a valid positive integer value</p>";

			} else {
				$n = (int)$num;
				$temp = $n;
				$sum = 0;
				$digits = strlen($n);
				while($temp > 0) {
					$digit = $temp%10;
					$sum += pow($digit, $digits);
					$temp = (int)($temp/10);
					console.log("$sum");
				}
				if ($sum == $n) {
					echo "<p>$n is an Armstrong number!</p> <p> Armstrong numbers from 1 to $n are: ";
					for ($i = 1; $i <= $n; $i++) {
						$temp = $i;
						$sum = 0;
						$digits = strlen($i);
						while($temp > 0) {
							$digit = $temp%10;
							$sum += pow($digit, $digits);
							$temp = (int)($temp/10);
						}
						if ($sum == $i) {
							echo "$i ";	
						}
					}
					echo "</p>";
				} else {
					echo "<p>$n is not an Armstrong Number</p>";
				}
			}
		}
	?>
</body>
</html>