<?php 
    // associative array = An array made og key=>value pairs
    // countries => capitals
    // id => username
    // item => price


    $capitals = array("USA"=>"Washington D.C", "Japan"=>"Kyoto", "South Korea"=>"Seoul", "India"=>"New Delhi");

    $capitals["China"] = "Beijing"; //add new key value pair
    // $capitals['USA'] = "Las Vegas"; //add new key value
    // $keys = array_keys( $capitals );
    // $values = array_values( $capitals );

    // echo $capitals["USA"];  //output Washington D.C  ..or

    foreach($capitals as $key => $value) {
        // echo $key . "=" . $value . "<br>";
        echo "{$key} = {$value} <br>";
    }

?>