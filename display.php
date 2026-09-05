<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

include 'gymheader.php';

$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM gym");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gym Members</title>

    <style>
        body {
            background: #000;
            color: white;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        /* 🔥 TOP BAR */
        .top-actions {
            display: flex;
            justify-content: space-between;
            width: 85%;
            margin: 20px auto;
        }

        .logout-btn {
            background: #ff1a75;
            padding: 8px 15px;
            border-radius: 8px;
            color: white;
            text-decoration: none;
        }

        .logout-btn:hover {
            box-shadow: 0 0 10px #ff4da6;
        }

        /* 📊 TABLE */
        table {
            width: 85%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #1a1a1a;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(255, 77, 166, 0.2);
        }

        th {
            background: #ff1a75;
            color: white;
            padding: 12px;
        }

        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #333;
        }

        tr:nth-child(even) {
            background: #141414;
        }

        a {
            color: #ff4da6;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-shadow: 0 0 5px #ff4da6;
        }

        .btn {
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
            width: 200px;
            background: #ff1a75;
            color: white;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<h2> Our Sisters </h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Plan</th>
    <th>Joined</th>
    <th>Fee</th>
    <th>Action</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['mid']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['plan']."</td>";
    echo "<td>".$row['joined']."</td>";
    echo "<td>".$row['fee']."</td>";
    echo "<td>
            <a href='updation.php?mid=".$row['mid']."'>Edit</a> |
            <a href='delete.php?mid=".$row['mid']."'>Delete</a>
          </td>";
    echo "</tr>";
}
?>

</table>

<a href="index.php" class="btn">➕ Add New Member</a>
<a href="home.php" class="btn">Back to Home</a>
<a href="logout.php" class="btn">Logout </a>

</body>
</html>

<?php include 'footer.php'; ?>