<!DOCTYPE html>
<html>
<head>
    <a class="nav-link" href="header.php">Header</a>
</head>

<body>

<?php
include 'includes/header.php';
if(isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
}
$x = "11";

switch ($x){
    case 8:
        echo "The answer is 8";
    break;
    case "9":
        echo "The answer is 9";
    break;
    case "10":
        echo "The answer is 10";
    break;
    case "11":
        echo "The answer is 11";
    break;
    default:
    echo "There is no answer";
}
   
?>
</body>

</html>