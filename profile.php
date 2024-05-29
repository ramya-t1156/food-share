<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Your Profile</h1>
    <p>Name: <?php echo $_SESSION['name']; ?></p>
    <p>Email: <?php echo $_SESSION['email']; ?></p>
    <p>Location: <?php echo $_SESSION['location']; ?></p>
    <a href="index.php">Home</a> | <a href="logout.php">Logout</a>
</body>
</html>
