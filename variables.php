
<?php
// strings
$name = "Joseph";
$food = "pizza";
$email = "jose123@gmail.com";

// integers
$age = 21;
$user = 2;
$quantity = 3;

// floats
$gpa = 8.9;
$price = 4.99;

// booleans -> 1 means true and 0 or blank(nothing will display) means false on the echo output.
$employed = true;
$online =false;

$total = null; 

echo "Hello {$name}<br>";
echo "I like {$food}<br>";
echo "Your email is {$email}<br>";

echo "You are {$age} years old<br>";
echo "There are {$user} users online<br>";

echo "You gpa is :  {$gpa}<br>";
echo "the price of apple is \${$price}<br>";

echo "Online status : {$online}<br>";
echo "Employment status: {$employed}<br><br>";


echo "You have ordered {$quantity} x {$food}s<br>";
$total = $quantity * $price;
echo "Your total is : \${$total}<br>";
?>
