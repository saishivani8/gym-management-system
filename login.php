<?php
session_start();
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
<h2>HerPower Login </h2>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>

    <input type="submit" name="login" value="Enter ">
</form>

<?php
if(isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    // 🔐 simple login (you can change this)
    if($user == "admin" && $pass == "1234") {
        $_SESSION['user'] = $user;

        header("Location: display.php");
    } else {
        echo "<p style='color:pink; text-align:center;' >Invalid login 💔</p>";
}
}
?>
<div style="text-align:center; margin-top:20px;">
    <a href="home.php" class="back-btn">⬅ Back to Home</a>
</div>