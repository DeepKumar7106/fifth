<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>strlen</title>
</head>

<body>
<h2> String length</h2>
<?php 
	$string = "This is a string";
	echo "<p>String: " . $string . "</p>";
	echo "<p>String length: " . strlen($string) . "</p>";
?>
</body>
</html>