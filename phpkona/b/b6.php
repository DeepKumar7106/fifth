<?php
    $con = new mysqli("localhost", "root", "", "feedback_db");

    if($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "INSERT INTO feedback(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

        if($con->query($sql) ==  TRUE) {
            echo "<p style='color:green;'> Thank you! Your feedback has been submitted</p>";
        } else {
            echo "<p style='color:red;'>Error: "  . $con->error . "</p>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
    <h2>Feedback form</h2>
    <form action="" method="post">
        <label>Name</label><br>
        <input type="text" name="name" required><br><br>
        <label>E-Mail</label><br>
        <input type="email" name="email" required><br><br>
        <label>Subject</label><br>
        <input type="text" name="subject" required><br><br>
        <label>Message</label><br>
        <textarea name="message" rows="5" required></textarea><br><br>
        <input type="submit" value="Submit Feedback">
    </form>
</body>
</html>