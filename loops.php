<!DOCTYPE html>
<html>
<head>
    <a class="nav-link" href="header.php">Header</a>
</head>

<body>

<?php
//Loop

 //While Loop
 //Do While Loop
 //For Loop
 //Foreach Loop  
$array = array("beep", "bop", "boop", "poo");

foreach ($array as $loopdata) {
   echo "What the ". $loopdata. "<br>";
}

include 'includes/header.php';
if(isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
}
?>
</body>

</html>