<?php 
// 3. Properties (Variable) a dah phal lo, mahse Constant (const) a phal
// Interface chhungah hian $name emaw $amount ang chi variable pangngai i dah lut thei lo (Error a chhuak ang). Mahse, thil danglam miah lo tur Constant erawh chu i dah thei thung.

interface RamDan { // Hetah hian kan chhut zawm tur a ni
    const TAX_RATE = 18; 
}

// A hman dan pawh kha:
echo RamDan::TAX_RATE;

?>