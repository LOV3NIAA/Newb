<!DOCTYPE html>
<html>
<head>
    <title>Title of Document</title>
    <a class="nav-link" href="header.php">Header</a>
</head>

<body>
<?php

include 'includes/header.php';
if(isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
}
    //String
    $name = 'Robotics Rock';

    //Integer
    $name = 10;
    
    //
    $name =10.5874

    //Boolean
  
   //Array
   $names = array("Ania", "Kristine", "Ross");
   echo $names['0'];
   
    ?>
</body>

</html>