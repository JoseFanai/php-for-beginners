
<?php 

// Trait is used to decclare methods than can be used in multiple class.
// Trait hi class ang deuh a hman tur a ni a mahse trait tih zawk tur a ni.
// Trait hi class puitling ni lovin, function awm khawmna (toolbox) ang a ni.

trait thlawhna {
    public function thlawk() {
        echo $this->hming . "-a boruakah a thlawk mek! <br>";
    }
}

trait tuiHleuhna {
    public function tuiHleuh() {
        echo $this->hming . "-a tui a hleuh mek! <br>";
    }
}

class NuPa {
    public $sakhua = "Mizo";
}

class Fa extends NuPa {
// heihi a pawimawh ber. USE hmang hian TRAIT kan equip
    use tuiHleuhna, thlawhna;

    public string $hming;

    public function __construct(string $hmingTur) {
        $this->hming = $hmingTur ; 
    }
}

$jose = new Fa("Jose");

echo $jose->hming . " chu " . $jose->sakhua . " sakhua a ni <br>";

// USE kan hman hnu ah kan return thei chiah
$jose->tuiHleuh();
$jose->thlawk();

?>