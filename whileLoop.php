<!-- <?php
// while loop = do some dcode infinitely while some condition remains true

// $counter = 0;

// while ($counter <= 10) {
//     $counter++;
//     echo $counter . "<br>";
// }
?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="whileLoop.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php 

    $seconds = 0;
    $running = true;

    if(isset($_POST["stop"])){
        $running = false;
    }
    while($running) {
        // wait 1 second
        $seconds++;
        echo $seconds . "<br>";
    }
 
?>