<!-- Access Modifiers = public , private , protected -->



<?php

class users
{

    public string $username;
    private string $password;

    public function __construct(string $name, string $pass) {
        $this->username = $name;
        $this->password = $pass;
    }

    // 2. SETTER METHOD (Kawngkhar dika luhna)
    // Pawn lam atanga password thlak duh an awm chuan, he function kaltlang chauh hian a thlak theih tawh ang
    public function changePassword(string $newPassword) {
        // private thatna : Rules kan siam thei
        if(strlen($newPassword) >= 6){
            $this->password = $newPassword;
            echo "Password changed successfully! <br>{$this->$newPassword} is your new password! <br>";
        }
        else{
            echo "Error: Password should be atleast 6 characters! <br>";
        }
    }
    
}

$user1 = new users("Jose", "123jose");
$user1->changePassword("123joseph");

$user2 = new users("Grace", "12345grace");
$user1->changePassword("123joseph");

$user3 = new users("Johny", "12345johny");
$user1->changePassword("123joseph");

$user1->login();
$user2->login();
$user3->login();

?>