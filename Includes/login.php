<?php
include_once 'includes/header.php';
?>
<h2>Log In</h2>
<form action="includes/login.inc.php" method="POST">
    <input type="text" name="username" placeholder="Username/Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="submit">Log In</button>
</form>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
    } else if ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect login information!</p>";
    }
}
include_once 'includes/footer.php';
?>