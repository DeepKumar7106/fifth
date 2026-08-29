<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dictionary</title>
</head>

<body>
<h2>Dictionary</h2>
<form method="post">
	<input type="text" name="word" required="required"/>
	<input type="submit" name="search" value="search"/>	
</form>
</body>
<?php 
	if(isset($_POST['search'])) {
		$word = strtolower(trim($_POST['word']));
		$dictionary = array(
			"apple" => "A fruit that grows on trees",
			"computer" => "An electronic device used for processing data",
			"river" => "A natural stream of water flowing towards the sea",
			"mountain" => "A large natural elevation of the earth's surface",
			"book" => "A set of written or printed pages bound together",
			"teacher" => "A person who helps student learn",
			"school" => "A place where education is provided",
			"sun" => "The star at the center of on solar system",
			"moon" => "A natural satellite that orbits the earth",
			"car" => "A vehicle used for transportation",
		);
		
		if (array_key_exists($word, $dictionary)) {
			echo "<p><strong>Meaning:</strong>" . $dictionary[$word] . "</p>";	
		} else {	
			echo "<p style='color:red;'>Word not found</p>";	
		}
	}
?>
</html>