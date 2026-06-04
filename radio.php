<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="radio.php" method="post">

        <input type="radio" name="credit-card" value="Visa">
        Visa <br>

        <input type="radio" name="credit-card" value="Mastercard">
        Mastercard <br>

        <input type="radio" name="credit-card" value="American Express">
        American Express <br>
        <input type="submit" name="confirm" value="confirm">

    </form>
</body>

</html>

<?php

if (isset($_POST["confirm"])) {

    $creditCard = null;

    if (isset($_POST["credit-card"])) {
        $creditCard = $_POST["credit-card"];
    }

    if ($creditCard == "Visa") {
        echo "You selected Visa";
    } elseif ($creditCard == "Mastercard") {
        echo "You selected Mastercard";
    } elseif ($creditCard == "American Express") {
        echo "You selected American Express";
    } else {
        echo "Please make a selection";
    }
}

?>