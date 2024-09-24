<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
    <link rel= "stylesheet" type="text/css" href="style.css">
  </head>

<header>
  <body>
  <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            <a class="nav-link" href="arrays.php">Arrays</a>
                            <a class="nav-link" href="calculator.php">Calculator</a>
                            <a class="nav-link" href="calendar.php">Calendar</a>
                            <a class="nav-link" href="conditionals.php">Conditionals</a>
                            <a class="nav-link" href="datatypes.php">Data Types</a>
                            <a class="nav-link" href="functions.php">Functions</a>
                            <a class="nav-link" href="loops.php">Loops</a>
                            <a class="nav-link" href="operators.php">Operators</a>
                            <a class="nav-link" href="superglobals.php">Superglobals</a>
                        </div>
                    </div>
                </div>
            </nav>


</header>
<?php
session_start();
$_SESSION['username'] = 'ItsjustNiaaa'; 
?>
</body>

</html>