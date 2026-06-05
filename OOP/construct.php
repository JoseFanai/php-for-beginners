<!-- __construct() = user input tam tak siam dawn ta ila .
 eg.300 user kha awlsam te in contruct hian line thui deuh ngailo in tawite in a siam thei.
 constructor awmzia chu Object i siam(new) rual chiah khan a data tur i thun nghal vek thei tihna a ni. -->



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

$user1 = new users("Jose", "123jose");  //new users("","") ,hemi chhung a kan assign theih nghal nachhan chu __construct method vang a ni.
// a hnuai a mi hi __construct method tello a assign a ni
// $user1 = new users();
// $user1->username = "Jose";
// $user1->password = "Jose123";


$user2 = new users("Grace", "123grace");

$user3 = new users("Johny", "123johny");

$user1->login();
$user2->login();
$user3->login();

?>