<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>functions</title>
</head>

<body>
<?php 
	function greeting($name) { echo "Good Morning " . $name; }
	greeting("Deep");
	
	function sqr($num) { return $num * $num; }
	$n = 10;
	echo "<p>Square of " .$n . " is ". sqr($n) ."</p>";
?>
</body>
</html>