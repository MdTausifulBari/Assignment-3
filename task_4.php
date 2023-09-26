<?php

function average_grade($multi_array){
    $count = 1;

    foreach($multi_array as $row){
        $average = 0;
        foreach($row as $key=>$item){
            $average += $item;
        }
        $average /= 3;
        printf("The average score of student{$count} is: {$average} \n");
        $count++;
    }
}

$studentGrades = [
    ["Math"=>95, "English"=>92, "Science"=>98],
    ["Math"=>98, "English"=>81, "Science"=>94],
    ["Math"=>80, "English"=>99, "Science"=>72]
];

average_grade($studentGrades);