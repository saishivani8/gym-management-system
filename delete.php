<?php
$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$mid = $_GET['mid'];

mysqli_query($conn, "DELETE FROM gym WHERE mid=$mid");

echo "Deleted successfully!";

header("Location: display.php");
?>