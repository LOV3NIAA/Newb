<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of Document</title>
    <a class="nav-link" href="header.php">Header</a>
</head>

<body>

<?php

include 'includes/header.php';
if(isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
}
    //Logical Operators
    $x = 40;
    $y = 20;

    if($x == $y xor 8==8){
        echo "True";
    }
   
?>
</body>

</html>