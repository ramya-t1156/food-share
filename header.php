<?php
session_start();
?>

<header>
    <div class="logo">Food <b style="color: #06C167;">Share</b></div>
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <nav class="nav-bar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php if (isset($_SESSION['username'])): ?>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php" class="active">Login or Signup</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<script>
    document.querySelector(".hamburger").onclick = function() {
        document.querySelector(".nav-bar").classList.toggle("active");
    }
</script>
