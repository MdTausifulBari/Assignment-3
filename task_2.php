<?php

function odd($n){
    return $n % 2 != 0;
}
function modify($numbers){
    $odd_number_array = array_filter($numbers, "odd");
    
    foreach($odd_number_array as $item){
        echo "{$item} ";
    }
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

modify($numbers);
