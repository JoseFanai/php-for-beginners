<!-- inheritance = Ro-tawm emaw In-chhawm.
            parent class & child class
            eg. class user{parentclass}
                class admin extends user{childclass} -->

<?php 

class User {

    protected string $username;

    public function __construct(string $name) {
        $this->username = $name;
    }

    public function login() {
        echo "👤 {$this->username} has successfully login <br>";
    }
}

class Admin extends User{   //"extends User" hi class User atanga inherit a ni
    public function banUser(string $badUser){
        echo "🚨 ADMIN : {$badUser} is banned by ADMIN {$this->username}! <br>";
    }
}

$user1 = new User("Jose");
$user1->login();

echo "<br>";

$admin1 = new Admin("Boss Jose");
$admin1->login();
echo "<br>";
$admin1->banUser("Hacker Boy");

?>