<?php
$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$mid = $_GET['mid'] ?? null;

if (!$mid) {
    die("Invalid ID");
}

$result = mysqli_query($conn, "SELECT * FROM gym WHERE mid=$mid");
$row = mysqli_fetch_assoc($result);
?>

<h2>Update Member</h2>
<body>

<form method="post">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Age: <input type="number" name="age" value="<?php echo $row['age']; ?>"><br><br>
    Plan: 
    <select name="plan" id="plan" onchange="setFee()">
    <option value="Monthly" <?php if($row['plan']=="Monthly") echo "selected"; ?>>Monthly</option>
    <option value="Quarterly" <?php if($row['plan']=="Quarterly") echo "selected"; ?>>Quarterly</option>
    <option value="Yearly" <?php if($row['plan']=="Yearly") echo "selected"; ?>>Yearly</option>
    <option value="Duo" <?php if($row['plan']=="Duo") echo "selected"; ?>>Duo</option>
    <option value="Trio" <?php if($row['plan']=="Trio") echo "selected"; ?>>Trio</option>
    <option value="Group" <?php if($row['plan']=="Group") echo "selected"; ?>>Group</option>
</select><br><br>
    Joined: <input type="date" name="joined" value="<?php echo $row['joined']; ?>"><br><br>
    Fee:<input type="number" name="fee" id="fee" value="<?php echo $row['fee']; ?>" readonly><br><br>

    <input type="submit" name="update" value="Update">
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
</body>

<?php
if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $plan = $_POST['plan'];
    $joined = $_POST['joined'];
    $fee = $_POST['fee'];

    mysqli_query($conn, "UPDATE gym SET 
        name='$name',
        age='$age',
        plan='$plan',
        joined='$joined',
        fee='$fee'
        WHERE mid=$mid");

    header("Location: display.php");
    exit();
}

?>