<?php 

session_start(); 

?> 

<!DOCTYPE html> 

<html lang="en"> 

<head> 
<link rel="icon" type="image/x-icon" href="https://th.bing.com/th/id/OIP.7qLodnoaTYnC2UQ_LfA3DQHaHa?rs=1&pid=ImgDetMain">
    <meta charset="UTF-8"> 

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <title>Nia's Site</title> 

</head> 

<body> 

<header> 

    <?php 

    if (isset($_SESSION["useruid"])) { 

        echo "<p>Welcome, " . $_SESSION["useruid"] . "!</p>"; 

    } 

    ?> 

    <nav> 

        <ul> 

 

 
   <a href ="home.php">Home</a>
            

            <?php 

            
                


                

          

            ?> 

        </ul> 

    </nav> 

</header> 

</body> 
         