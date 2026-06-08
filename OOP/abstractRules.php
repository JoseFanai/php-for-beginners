<?php 

abstract class NuPa {
    // parent ah hming leh kum kan dil ang
    abstract public function share(string $name, int $age);
}

class child extends NuPa {
    public function share(string $name, int $age) {

        echo "ka hming chu " . $name . " a ni a, Kum " . $age . " a upa ka ni.";
        
        // parameter ah hiam abstract ah $name leh $age a request avangin $name chauh emaw $age chauh i respond chuan error a awm dawn a ni, abstract parameter a awm ang ang kha pass leh vek tur a ni
        //eg. public function share ($name){
        //      echo "Hey " . $name;
        //}    
        //output : ERROR
        // a chung a mi hi a tihdan dik chu a ni
   }
}


?>