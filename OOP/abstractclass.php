<?php

    abstract class RBI {
        public function intro() {
            echo "Hei hi India rama Bank pawm tlak a ni. <br>";
        }

        // ABSTRACT METHOD (strict rules)
        // bracket{} a neilo a, a hming chauh a ni
        abstract public function interestRate();
    }

    class SBI extends RBI {
        // RBI in rules a siam avangin he function hi SBI leh HDFC emaw child class te hian an ziak ngei ngei tur a ni
        // Ziaklo se chuan ERROR a pe ang!
        public function interestRate() {
            echo "SBI ah chuan interest hi 8% a ni e.<br>";
        }
    }

    class HDFC extends RBI {
        public function interestRate(){
            echo "HDFC ah chuan interest hi 10% a ni e. <br>";
        }
    }


    // $RBI = new RBI; //ERROR: abstract class a ni a, object a siam theilo
    $SBI = new SBI();
    $SBI->intro();
    $SBI->interestRate();

    $HDFC = new HDFC();
    $HDFC->intro();
    $HDFC->interestRate();
?>