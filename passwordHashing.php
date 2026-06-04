<!-- hashing = transforming sensitive data (password) into letteres, numbers, and/or symbolds 
 via a mathematical process. (similar to encqyption) 
 Hides the original data from 3rd parties. -->

<?php

$password = "jose123";

$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify("jose123", $hash)) {
    echo "You are logged in!";
} else {
    echo "Incorrect password!";
}
?>