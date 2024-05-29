<?php
session_start();
include '../connection.php';

$acc = 0;
$msg = 0;

if (isset($_POST['signup'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $location = $_POST['district'];

    $pass = password_hash($password, PASSWORD_DEFAULT);
    $sql = "SELECT * FROM admin WHERE email='$email'";
    $result = mysqli_query($connection, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $acc = 1;
    } else {
        $query = "INSERT INTO admin(name, email, password, location) VALUES('$username', '$email', '$pass', '$location')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            $msg = 1; // Account created successfully
        } else {
            echo '<script type="text/javascript">alert("Data not saved")</script>';
        }
    }
}

if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sanitized_emailid = mysqli_real_escape_string($connection, $email);
    $sanitized_password = mysqli_real_escape_string($connection, $password);

    $sql = "SELECT * FROM admin WHERE email='$sanitized_emailid'";
    $result = mysqli_query($connection, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($sanitized_password, $row['password'])) {
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $row['name'];
                $_SESSION['location'] = $row['location'];
                header("location: admin.php");
            } else {
                $msg = 1; // Login failed
            }
        }
    } else {
        echo "<h1><center>Account does not exist</center></h1>";
    }
}
?>

