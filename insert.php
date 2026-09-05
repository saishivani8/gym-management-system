<?php
$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $plan = $_POST['plan'];
    $joined = $_POST['joined'];
    $fee = $_POST['fee'];

    $sql = "INSERT INTO gym (name, age, plan, joined, fee)
            VALUES ('$name', '$age', '$plan', '$joined', '$fee')";

    if (mysqli_query($conn, $sql)) {
    echo "<h3>Member added successfully!</h3>";
    echo "<a href='home.php'>Back to Home</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

} else {
    echo "Invalid access!";
}
?>
<html>
    <body bgcolor=mistyrose>
    </body>
</html>
