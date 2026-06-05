
<?php 

class Mizo {
    public string $hming;   // normal property

    public static $mizoAwmZat = 0;  //static property

    public function __construct (string $name) {
        $this->hming = $name;

        self::$mizoAwmZat++;    //hei hian in register thar apiang a count zel dawn a ni(increment)
    }

    //static method
    public static function totalMizo() {
        echo "Mizo awm zat chu: " . self::$mizoAwmZat . "<br>";
    }
}

// 1. Normal method hmang tur chuan Object siam a ngai
$mi1 = new Mizo("jose");
$mi2 = new Mizo("jos");
$mi3 = new Mizo("jo");

// 2. STATIC METHOD KOH DAN (A pawimawh lai):
// 'new Mizo()' tiin object kan siam a ngai ve lo!
// Class hming leh Double Colon (::) hmangin kan ko nghal tawp thei.
Mizo::totalMizo();

// output: Mizo awm zat chu: 3

?>