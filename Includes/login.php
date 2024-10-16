<?php
include_once 'Includes/header.php';
?>
<h2>Log In</h2>
<form action="Includes/login.inc.php" method="POST">
    <input type="text" name="username" placeholder="Username/Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="submit">Log In</button>
</form>

<?php
// Check if 'error' is set before accessing it
if (isset($_GET["error"])) {
    switch ($_GET["error"]) {
        case "emptyinput":
            echo "<p>Fill in all fields!</p>";
            break;
        case "wronglogin":
            echo "<p>Incorrect login information!</p>";
            break;
        default:
            echo "<p>Something went wrong!</p>";
    }
}
include_once 'Includes/footer.php';
?>