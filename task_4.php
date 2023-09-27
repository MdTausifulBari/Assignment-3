<?php

function average_grade($multi_array){

    foreach($multi_array as $primaryKey=>$row){
        $average = 0;
        foreach($row as $secondaryKey=>$item){
            $average += $item;
        }
        $average /= 3;

        switch($average){
            case $average >= 90:
                printf("The grade of {$primaryKey} is: A+ \n");
                break;
            case $average >= 80:
                printf("The grade of {$primaryKey} is: A \n");
                break;
            case $average >= 70:
                printf("The grade of {$primaryKey} is: B \n");
                break;
            case $average >= 60:
                printf("The grade of {$primaryKey} is: C \n");
                break;
            case $average >= 50:
                printf("The grade of {$primaryKey} is: D \n");
                break;
            case $average >= 43:
                printf("The grade of {$primaryKey} is: E \n");
                break;
            default:
                printf("The grade of {$primaryKey} is: E \n");
        }
    }
}

$studentGrades = [
    "student1" => ["Math"=>95, "English"=>92, "Science"=>98],
    "student2" => ["Math"=>98, "English"=>81, "Science"=>94],
    "student3" => ["Math"=>56, "English"=>99, "Science"=>46]
];

average_grade($studentGrades);