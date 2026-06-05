<?php

class users
{

    public $username;
    public $password;

    public function __construct($name, $pass) {
        $this->username = $name;
        $this->password = $pass;
    }

    public function login()
    {
        echo "Hello {$this->username} !,You have successfully logged in <br>";
    }
}

$user1 = new users("Jose", "123jose");

$user2 = new users("Grace", "123grace");

$user3 = new users("Johny", "123johny");

$user1->login();
$user2->login();
$user3->login();

?>