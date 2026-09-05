<?php include 'gymheader.php'; ?>
<?php
$conn = new mysqli("localhost", "root", "", "project");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gym</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add Member</h2>

<form action="insert.php" method="post">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="text" name="age" required><br><br>
    Plan: 
    <select name="plan" id="plan" onchange="setFee()">
    <option value="">--Select Plan--</option>
    <option value="Monthly">Monthly</option>
    <option value="Quarterly">Quarterly</option>
    <option value="Yearly">Yearly</option>
    <option value="Duo">Duo</option>
    <option value="Trio">Trio</option>
    <option value="Group">Group</option>
</select><br><br>
    Joined: <input type="date" name="joined" required><br><br>
    Fee:<input type="number" name="fee" id="fee" readonly required><br><br>
    

    <input type="submit" value="Add Member"> 
    <a href="login.php">View Members</a>
    <a href="home.php">Back to Home</a>
</form>

<script>
function setFee() {
    var plan = document.getElementById("plan").value;
    var fee = 0;

    if (plan == "Monthly") fee = 1500;
    else if (plan == "Quarterly") fee = 5000;
    else if (plan == "Yearly") fee = 9000;
    else if (plan == "Duo") fee = 15000;
    else if (plan == "Trio") fee = 21000;
    else if (plan == "Group") fee = 30000;

    document.getElementById("fee").value = fee;
}
</script>
<?php include 'footer.php'; ?>

</body>
</html>
</body>
</html>