<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <?php
    if (isset($_SESSION['email'])) {
        echo "<h1>Welcome, " . $_SESSION['name'] . "</h1>";
        echo "<a href='profile.php'>Profile</a> | <a href='logout.php'>Logout</a>";
    } else {
        echo "<a href='login.php'>Login</a> | <a href='signup.php'>Sign Up</a>";
    }
    ?>
</body>
</html>
