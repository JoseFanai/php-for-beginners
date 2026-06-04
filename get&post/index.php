<!-- 
$_GET, $_POST = special variables used to collect data from an HTML <form>.
                data is sent to the file in the ACTION attribute of the <form>.
                <form action="file.php" method="get>
                    
$_GET = data is append to the url
        NOT SECURE
        char limit
        bookmark is possible w/ values
        GET requests can be cached
        Better for a search page

$_POST = Data is packaged inside the body of the HTTP request
        MORE SECURE
        No data limit
        cannot bookmark
        GET request are not cached
        Better for submitting credentials
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">

        <label>username:</label><br>
        <input type="text" name="username"><br><br>
        <label>password:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Log in">

    </form>
</body>

</html>

<?php
// echo $_GET["username"] . "<br>";
// echo $_GET["password"] . "<br>";
echo $_POST["username"] . "<br>";
echo $_POST["password"] . "<br>";
?>