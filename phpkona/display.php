<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display</title>
</head>
	
<body>
	<h2>Student Registration Details</h2>
    <?php 
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			echo "<strong>First name: </strong>" . htmlspecialchars($_POST['fname']) . "<br>";
			echo "<strong>Last Name: </strong>" . htmlspecialchars($_POST['lname']) . "<br>";
			echo "<strong>Address: </strong>" . nl2br(htmlspecialchars($_POST['address'])) . "<br>";
			echo "<strong>E-Mail: </strong>" . htmlspecialchars($_POST['email']) . "<br>";
			echo "<strong>Mobile: </strong>" . htmlspecialchars($_POST['mobile']) . "<br>";
			echo "<strong>City: </strong>" . htmlspecialchars($_POST['city']) . "<br>";
			echo "<strong>State: </strong>" . htmlspecialchars($_POST['state']) . "<br>";
			echo "<strong>Gender: </strong>" . htmlspecialchars($_POST['gender']) . "<br>";
			echo "<strong>Bloodgroup: </strong>" . htmlspecialchars($_POST['bloodgroup']) . "<br>";
			
			if(!empty($_POST['hobbies'])) {
				echo "<strong>Hobbies: </strong>" . implode(", ", $_POST['hobbies']). "<br>";
			} else {
				echo "<strong>Hobbies: </strong> None";
			}
		}
	?>
</body>
</html>