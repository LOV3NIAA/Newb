<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <a class="nav-link" href="header.php">Header</a>
</head>
<body>
    
<?php
    include 'includes/header.php';
    if(isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
    }
    $dayofweek = date("w");
    switch ($dayofweek) {
        case 1:
            echo "<p>It is Monday!</p>";
        break;
        case 2:
            echo "<p>It is Tuesday!</p>";
        break;
        case 3:
            echo "<p>It is Wednesday!</p>";
        break;
        case 4:
            echo "<p>It is Thursday!</p>";
        break;
        case 5:
            echo "<p>It is Friday!</p>";
        break;
        case 6:
            echo "<p>It is Saturday!</p>";
        break;
        case 0:
            echo "<p>It is Sunday!</p>";
        break;
    }
        
    
?>

</body>
</html>
