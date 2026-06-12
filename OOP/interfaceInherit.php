<?php 

interface ChawEiDan 
{
    public function tawngLohtur();
}

interface KhawtlangDan extends ChawEiDan
{
    public function miZahtur();
}

class Mihring implements KhawtlangDan
{
    public function tawngLohtur()
    {
        echo "Chaw ei lai a tawng loh tur <br>";
    }

    public function miZahtur()
    {
        echo "Aia upa zah thiam tur <br>";
    }
}

$new = new Mihring();
$new->tawngLohtur();
$new->miZahtur();

?>