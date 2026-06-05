
<?php
/*   class = class chu blueprint ang a ni
     object = object chu a tak a chantir na
     method = function kan tih thin
     properties = variables kan tih thin */

class Userss
{

    public string $username;
    public string $password;

    public function login()
    {
        echo "Hello {$this->username} !,You have successfully logged in <br>";
    }
}

$user1 = new Userss();
$user1->username = "jose";
$user1->password = "123jose";

$user2 = new Userss();
$user2->username = "grace";
$user2->password = "123grace";

$user3 = new Userss();
$user3->username = "johny";
$user3->password = "123johny";

$user1->login();
$user2->login();
$user3->login();


?>