<!-- $_SERVER = SGB that contains headers, paths, and script locations.
 the entries in this array are created by the web server.
 Shows nearly everything you need to know about the current webpage env. -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post"> -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        username : <br>
        <input type="text" name="username">
        <input type="submit">
    </form>
</body>

</html>

<!-- <?php
foreach ($_SERVER as $key => $value) {
    echo "{$key} = {$value} <br>";
}
?> -->

<!-- if($_SERVER["REQUEST_METHOD"] == "POST"){

}  -->