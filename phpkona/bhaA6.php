<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h2>dictionary<h2>
<form method="post" action=" ">
ENTER A WORD:
<input type="text" name="word" required />
<input type="submit" name="search" value="search" />
</form>
<?php
if(isset($_POST['search']));
{
	$word=strtolower(trim($_POST['word']));
	$dictionary=array(
	"apple"=>" KEEPS DOCTOR AWAY",
	"computer"=>"AN ELECTRONIC DEVICE USED FOR PROCESSING DATA",
	"river"=>"A NATURAL STREAM OF WATER FLOWING TOWARDS THE SEA",
	"mountain"=>"A LARGE NATURAL ELEVATION OF THE EARTH's SURFACE",
	"book"=>"A SET OF WRITTEN OR PRINTED PAGES BOUND TOGETHER",
	"teacher"=>"A PERSON WHO HELPS STUDENT LEARN",
	"school"=>"A PLACE WHERE EDUCATION IS PROVIDED",
	"sun"=>" THE STAR AT THE CENTER OF THE SOLAR SYSTEM",
	"moon"=>"A NATURAL SATELITTE THAT ORBITS THE EARTH",
	"car"=>"A VEHICLE USED FOR TRANSPORTATION"
	);
	
	if(array_key_exists($word,$dictionary))
	{
		echo"<p style='color:green;'><strong>MEANING:</strong>",$dictionary[$word]."</p>";
	}else{
		echo"<p style='color:red;'>WORD NOT FOUND!!!</p>";
	}
}	
?>
</body>
</html>