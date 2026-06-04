<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="mathFunctions.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <label>z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>

</html>

<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

// $total = abs($x);  //absolute value 
// $total = round($x);  //rounded up value 
// $total = floor($x);  //rounded down 
// $total = ceil($x);  //rounded to  nearest
// $total = sqrt($x);  //square root function
// $total = pow($x, $y);   //power function
$total = max($x, $y, $z); //maximum 
// $total = min($x, $y, $z); //minimum 
// $total = pi();
// $total = rand(1,100); //random number between 1-100

echo $total;
?>