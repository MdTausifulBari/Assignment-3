<?php

// for ($char = 'a'; $char <= 'z'; $char++) {
//     echo $char;
// }

// for ($char = 'A'; $char <= 'Z'; $char++) {
//     echo $char;
// }

function generatePassword($length){
    $all_characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+";
    $password = "";

    for($i = 0; $i < $length; $i++){
        $password .= $all_characters[rand(0, strlen($all_characters) - 1)]; // "." in PHP used to add or concate two strings
    }

    echo $password;
}

generatePassword(12);

