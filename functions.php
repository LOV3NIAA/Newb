<!DOCTYPE html>
<html>
<head>
    <title>Title of Document</title>
    <a class="nav-link" href="header.php">Header</a>
</head>

<body>

<?php

function newCalc($x){
    $newnr = $x * 0.75;
    echo "Here is 75% of what you wrote:". $newnr;
}


$x = 12500;
newCalc($x);

echo "<br>";

$a = 125;
newCalc($a);

?>

</body>

</html>