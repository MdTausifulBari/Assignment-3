<?php

$text = "The quick brown fox jumps over the lazy dog.";

function modify($string){
    $string_lower = strtolower($string);

    $modified_string = str_replace("brown", "red", $string_lower);
    
    echo $modified_string;
}

modify($text);