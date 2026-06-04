<!-- cookie = Information about a user stored in a user's web-browser targeted advertisements, browsing preferences, and other non-sensitive data. -->

<?php 

// setcookie ("key","value",time(in sec),"path");
    setcookie("fav_food","pizza", time() + (86400 *2),"/");
    setcookie("fav_drink","beer", time() + (86400 *2),"/");

    // foreach($_COOKIE as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    if(isset($_COOKIE["fav_food"])){
        echo "BUY SOME {$_COOKIE["fav_food"]}";
    }
    else{
        echo "I don't know your favorite food";
    }
?>