<?php

// methods collision (method hming inang) a awm palh chuan error a awm dawn.
// chu mi chinfel nan chuan 'insteadof' leh 'as' hman tur a ni.
// insteadof (a aiah) : Pakhat zawk zawk thlan nan kan hmang.
// as  (hming thar) : Hming thar kan phuahsak.

trait jetPack
{
    public function startEngine()
    {
        echo "Boruak engine a nung ta e! <br>";
    }
}

trait scubaGear
{
    public function startEngine() {
        echo "Tuihnuai engine a nung ta e! <br>";
    }
}

class Fa {

    public string $name;
    public function __construct(string $hming){
        $this->name = $hming;
    }
    use jetPack,scubaGear {
        jetPack::startEngine insteadof scubaGear;
        // scubaGear::startEngine as startTuiEngine;
    }
}

$jose = new Fa("Jose");

$jose->startEngine();
// $jose->startTuiEngine();

?>