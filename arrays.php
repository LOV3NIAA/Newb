<!DOCTYPE html>
<html>
<head>
    <title>Title of Document</title>
    <a class="nav-link" href="header.php">Header</a>
</head>

<body>

<?php

include('header.php');
if(isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
}


$array = array("Dora", "Diego","Nia;)", "Boots","Jake");

echo $array[2]

?>

</body>

</html>