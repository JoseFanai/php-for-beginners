<?php 

// three (3) types : 
// 1. __construct
// 2. Properties
// 3. strict Rules

abstract class Laptop {
    //properties/variables 
    public string $brand;
    public function __construct(string $brand) {
        $this-> brand = $brand;
    }

    // abstract method/function
    abstract public function bootSound();

}

class MacBook extends Laptop {
    // constructor siam nawn ngailoin a chhawm/ring ve nghal
    public function bootSound() {
        echo $this->brand . " Chime sound: Chuuungnggg! 🔔<br>";
    }
}

$myMac = new MacBook("Apple Macbook Air");
$myMac->bootSound(); //output: "Apple Macbook Air Chime sound: Chuuungnggg!🔔 

?>