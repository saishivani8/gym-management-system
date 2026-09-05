<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>
</head>
<body bgcolor="pink">

<h2>Add Member</h2>

<form action="insert.php" method="post">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    Plan: <input type="text" name="plan" required><br><br>
    Join Date: <input type="date" name="joined" required><br><br>
    Fee: <input type="number" name="fee" required><br><br>

    <input type="submit" value="Add Member"> 
    <a href="display.php">View Members details</a>
</form>

</body>
</html>