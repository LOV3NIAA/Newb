<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
</head>
<body>
<header>
    <?php
    if (isset($_SESSION["useruid"])) {
        echo "<p>Welcome, " . $_SESSION["useruid"] . "!</p>";
    }
    ?>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo '<li><a href="includes/logout.inc.php">Log out</a></li>';
            } else {
                echo '<li><a href="signup.php">Sign Up</a></li>';
                echo '<li><a href="login.php">Log In</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>
</body>