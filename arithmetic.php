<div>
    <h1>arithmetic operators</h1>
    <?php
    // + - * / ** %

    $x = 10;
    $y = 5;
    $z = null;

    $z = $x + $y; // addition
    echo "The sum of {$x} and {$y} is : {$z}<br>";
    $z = $x - $y; // subtraction
    echo "The difference of {$x} and {$y} is : {$z}<br>";
    $z = $x * $y; // multiplication
    echo "The product of {$x} and {$y} is : {$z}<br>";
    $z = $x / $y; // division
    echo "The quotient of {$x} and {$y} is : {$z}<br>";
    $z = $x % $y; // modulus
    echo "The remainder of {$x} and {$y} is : {$z}<br>";

    ?>
</div>

<div>

    <h1>increment/Decrement operators</h1>
    <?php

    $counter = 10;

    $counter = $counter++;
    $counter2 = $counter += 2;
    $counter3 = $counter--;
    $counter4 = $counter -= 3;
    echo "Counter value is : {$counter}<br>";
    echo "Counter value is : {$counter2}<br>";
    echo "Counter value is : {$counter3}<br>";
    echo "Counter value is : {$counter4}<br>";
    ?>

</div>

<div>
    <h1>Operator Precedence</h1>
    <?php

    // (), **(power) , *  /  % , +  -

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo "the total is: {$total}<br>";

    ?>
</div>