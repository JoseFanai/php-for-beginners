<!-- class = class chu blueprint ang a ni
     object = object chu a tak a chantir na
     method = function kan tih thin
     properties = variables kan tih thin-->


<?php
/*
class users
{

    public $username;
    public $password;

    public function login()
    {
        echo "Hello {$this->username} !,You have successfully logged in <br>";
    }
}

$user1 = new users();
$user1->username = "jose";
$user1->password = "123jose";

$user2 = new users();
$user2->username = "grace";
$user2->password = "123grace";

$user3 = new users();
$user3->username = "johny";
$user3->password = "123johny";

$user1->login();
$user2->login();
$user3->login();
*/
?>

<?php

// 1. CLASS KAN SIAM (Blueprint)
class User {
    // Properties (Variable kan tihte kha)
    public $username;
    public $password;

    // Methods (Function kan tihte kha)
    public function login() {
        // '$this' awmzia chu "He class ami hi" tihna a ni.
        echo "Hello, " . $this->username . "! I rawn login hlawhtling e. <br>";
    }
}

// ----------------------------------------------------

// 2. OBJECT KAN SIAM CHHUAK (A takin kan hmang tan dawn)

// User thar kan siam dawn chuan 'new' tih hman tur a ni
$user1 = new User(); 
$user1->username = "jose123";
$user1->password = "secretpass";

// User dang pakhat kan siam belh leh dawn
$user2 = new User();
$user2->username = "fakebook_king";
$user2->password = "12345678";

// 3. METHOD KAN KOH (Action)
// Object a thil awm kan koh chhuah dawnin '->' (Arrow) hman tur a ni
$user1->login(); 
$user2->login();

?>