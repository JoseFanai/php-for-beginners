<?php 
    // array = "variable" which can hold more than one value at a time

    $foods = array("apple", "orange", "banana", "coconut");  
  
    // $foods[0] = "pineapple";
    // array_push($foods,"mango");
    // array_pop($foods); //pop-out the last element
    // array_shift($foods);  //pop-out fist element
    // $reversedFood = array_reverse($foods);  //this will reverse
    // foreach ($reversedFoods as $food){
    //     echo $food . "<br>";
    // } 
    // echo count($foods); //count elements
    
    foreach ($foods as $food){
        echo $food . "<br>";
    }

?>