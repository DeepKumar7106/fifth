<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="display.php" method="post">
        <label for="">First Name: </label>
        <input type="text" name="fname" required > <br>
        <label for="">Last Name: </label>
        <input type="text" name="lname" required > <br>
        <label for="">Address: </label>
        <textarea name="address" required row="3" cols="30"></textarea> <br>
        <label for="">E-Mail: </label>
        <input type="email" name="email" required > <br>
        <label for="">Mobile: </label>
        <input type="tel" name="mobile" pattern ="[ required0-9]{10}" max-lenght="10"> <br>
        <label for="">City: </label>
        <input type="text" name="city" required > <br>
        <label for="">State: </label>
        <input type="text" name="state" required > <br>
        <lable>Gender</lable>
        Male: <input type="radio" name="gender" required value="male">
        Female: <input type="radio" name="gender" required value="female">
        Other: <input type="radio" name="gender" required value="other">
        <lable>Hobbies</lable>
        <input type="checkbox" name="hobbies[]" value="Reading">Reading</input>
        <input type="checkbox" name="hobbies[]" value="Sports">Sports</input>
        <input type="checkbox" name="hobbies[]" value="Travel">Travel</input>
        <input type="checkbox" name="hobbies[]" value="Music">Music</input>
        <label for="">Blood Group</label>
        <select name="bloodgroup">
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select> <br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>