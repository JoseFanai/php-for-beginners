<?php
// 1. Message kan pholanghna tur variable kan siam lawk
$message = "";

// 2. Form submit a ni em tih kan check phawt ang
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 3. User-in HTML form-a password a rawn type luh kha kan man (catch) ang
    // (A hnuaia input name="user_password" tih atanga rawn kal a ni)
    $input_password = $_POST["user_password"];

    // 4. DATABASE-A KAN DAH THAT TAWH ANG IN NGAIHTUAH RAWH
    // (A takah chuan user-in account a siam tirhin he hash hi database-ah kan save thin. 
    // Tunah chuan test nan i tih dan ngaiin kan siam chawp rih ang).
    $correct_password = "jose123";
    $saved_hash = password_hash($correct_password, PASSWORD_DEFAULT);

    // 5. I code ziah ngei mai khan kan verify dawn ta a ni!
    // (User type luh leh kan hash dah that sa kha a inmil em?)
    if (password_verify($input_password, $saved_hash)) {
        $message = "<span style='color: green;'>You are logged in! 🎉</span>";
    } else {
        $message = "<span style='color: red;'>Incorrect password! ❌</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>

<body>

    <h2>Secure Login</h2>

    <?php
    if ($message != "") {
        echo "<p>$message</p>";
    }
    ?>

    <form action="" method="POST">
        <label>Enter Password:</label><br>

        <input type="password" name="user_password" required>
        <br><br>

        <button type="submit">Login</button>
    </form>

</body>

</html>