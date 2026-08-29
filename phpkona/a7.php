<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>String Manipulation</title>
</head>
	<h2>String Manipulation</h2>
    <form method="post">
    	Enter a string: 
    	<input type="text" name="str" required="required" /> 
        <br /><br />
       
        <input type="submit" name="length" value="Get Length" />
    	<input type="submit" name="reverse" value="Reverse" />
    	<input type="submit" name="upper" value="Upper" />
    	<input type="submit" name="lower" value="Lower" />
    	<input type="submit" name="replace" value="Replace" />
    	<input type="submit" name="palindrome" value="Get Pallindrome" />
    	<input type="submit" name="shuffle" value="Shuffle" />
    	<input type="submit" name="wordcount" value="Word Count" />   
    </form>
    
    <?php
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$str = $_POST['str'];
			
			if(isset($_POST['length'])) {
				echo "<p>Length of String: " . strlen($str) . "</p>";
			}	
			
			if(isset($_POST['reverse'])) {
				echo "<p>Reversed String: " . strrev($str) . "</p>";
			}
			
			if(isset($_POST['upper'])) {
				echo "<p>Uppercase: " . strtoupper($str) . "</p>";
			}	
			
			if(isset($_POST['lower'])) {
				echo "<p>Lowercase: " . strtolower($str) . "</p>";
			}
				
			if(isset($_POST['replace'])) {
				echo "<p>Replaced String: " . str_replace('a','x',$str) . "</p>";
			}
				
			if(isset($_POST['palindrome'])) {
				if ($str == strrev($str)) {
					echo "<p>'$str' is a pallindrome</p>";				
				} else {
					echo "<p>'$str' is not a pallindrome</p>";				
				}			
			}
				
			if(isset($_POST['shuffle'])) {
				echo "<p>Shuffled String: " . str_shuffle($str) . "</p>";
			}	
			
			if(isset($_POST['wordcount'])) {
				echo "<p>Word Count: " . str_word_count($str) . "</p>";
			}		
		}
	?>
<body>
</body>
</html>