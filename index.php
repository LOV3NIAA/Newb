<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title of Document</title>
    <a class="nav-link" href="header.php">Header</a>
</head>

<body>
    <form method= "GET">
        <input type= "text" name="person">
        <button>SUBMIT</button>
    </form>

   <?php
//This gets something from the database
$name ="Nia";
echo $name." is a silly willy gooooose!";
  /*echo "Nia;
    echo "is a silly willy gooooose!";*/
    
    ?>
</body>

</html>