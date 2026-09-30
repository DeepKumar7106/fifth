<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Odd or Even</title>
</head>

<body>
<?php
$number = 31;

if ($number % 2 == 0) {
    echo "$number is an Even number.";
} else {
    echo "$number is an Odd number.";
}

$a = 10;
$b = 20;

echo "<h2>a : $a</h2>";
echo "<h2>b : $b</h2>";

if ($a > $b) {
    echo "<p>$a is greater than $b</p>";
} else {
    echo "<p>$b is greater than $a</p>";
}

$c = 5;
echo "<h2>c : $c</h2>";
if ($a > $b && $a > $c) {
    echo "<p>$a is greatest</p>";
} else if ($b > $a && $b > $c) {
    echo "<p>$b is greatest</p>";
} else {
    echo "<p>$c is greatest</p>";
}

$num = 4;
$numout = $num;
$fact = 1;
while ($num >= 2) {
	$fact = $fact * $num;
	$num = $num - 1;
}
echo "<p>Factorial of $numout is $fact</p>";

$originalNumber = 123456789;
$originalNumberOut = $originalNumber;
$revNum = 0;

while ($originalNumber > 0) {
	$revNum = ($revNum * 10) + $originalNumber%10;
	$originalNumber = floor($originalNumber/10);
}
echo "<p>$originalNumberOut in reversed is $revNum</p>";

?>

</body>
</html>