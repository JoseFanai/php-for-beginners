<?php 

interface ThiamnaA{ public function codeZiah();}
interface ThiamnaB{ public function designZiah();}

// class pakhat extends(inherit) ang lo deuhin interface pakhat aia tam a implements thei.
class Developer implements ThiamnaA, ThiamnaB 
{
    public function codeZiah(){ echo "PHP ka ziak thiam. <br>";}
    public function designZiah(){ echo "CSS ka thiam bawk. <br>";}
}

?>