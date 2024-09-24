<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<?php
   
    include 'includes/header.php';
    if(isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
    }
    setcookie("name", "Nia", time() + 172800);

?>

</body>
</html>
