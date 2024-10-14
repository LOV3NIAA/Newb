<?php
include_once 'includes/header.php';
?>
<h2>Sign Up</h2>
<form action="includes/signup.inc.php" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="passwordRepeat" placeholder="Repeat Password">
    <button type="submit" name="submit">Sign Up</button>
</form>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
    } else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
    } else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
    } else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords don't match!</p>";
    } else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong, try again!</p>";
    } else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken!</p>";
    } else if ($_GET["signup"] == "success") {
        echo "<p>Sign up successful!</p>";
    }
}
include_once 'includes/footer.php';
?>