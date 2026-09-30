<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>array example</title>
<style>
p {background: teal;}
</style>
</head>

<body>
<h2> Array functions</h2>

</body>
	<?php 
		$arr = array(10, 49, 3, 34, 2, 21, 1, 2, 3, 4, 5, 6);
		foreach($arr as $v) { echo $v ." "; }
		
		echo "<p>Array length: " .count($arr). "</p>";
		sort($arr);
		echo "<p>Sorted Array: ";
		foreach($arr as $v) { echo $v ." "; }
		echo "</p>";
		
		rsort($arr);
		echo "<p>Descending Array : ";
		foreach($arr as $v) { echo $v ." "; }
		echo "</p>";
	?>

</html>