<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="loginIssetEmpty.php" method="post">

        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Log in">

    </form>
</body>

</html>

<?php 
    // foreach($_POST as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    if(isset($_POST["login"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "username is missing";
        }
        elseif(empty($password)){
            echo "password is missing";
        }
        else{
            echo "hello {$username}";
        }
    }
?>