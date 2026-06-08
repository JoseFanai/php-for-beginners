<?php 

// function kan siam a, a diklo thei lai kan "throw ang"
function pawisaThawnna($balance, $amount) 
{
    if ($amount > $balance) 
        {
            // heihi error siam chawpna a ni. 'Exception' thar kan vawm chhuak
            throw new Exception("insufficient balance!❌");
        }
    
    if ($amount <= 0)
        {
            throw new Exception("Amount should be more than '0' ⚠️");
        }

        return "Transaction of ₹" . $amount . " completed successfully🎉";
}

try {
// tah hian kan function kan run chhin ang
// kan balance 500 a ni a amount 2000 thawn kan tum lui chhin ang
    echo "Payment is processing...<br>";

    $result = pawisaThawnna(500,200);

    // a chung a mi khi a dikloh chuan echo $result; hi a thleng lo ang 
    echo $result;
}

catch(Exception $error){
// Funtion atanga kan 'throw' chhuah apiang kha hetah hian a rawn tla lut ang.
    echo "<b>Be Careful: </b>". $error->getMessage() . "<br>";
}

// note: exception kan hman avangin website a thi lo a, a la nung reng tho
echo "<br><i>Website is still running, you can still visit another pages...</i>"

?>