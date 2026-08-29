<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$a = 1493875498350;
	$b = 2436098062240;
	echo "<p> a is $a and b is $b</p>";
	$a = $a + $b;
	$b = $a - $b;
	$a = $a - $b;    
	echo "<p> a is $a and b is $b</p>";
?>
</body>
</html>