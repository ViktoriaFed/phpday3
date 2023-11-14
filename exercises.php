<?php
//EXERCISE 1
// $name = "Vika";
// $i = 0;
// do {
//     $i++;
//     echo $name . "<br>";
// } while ($i < 50);

// for($i=0; $i<50; $i++){
//     echo $name . "<br>";
// };
// while ($i<50){
//     $i++;
//     echo $name . "<br>";
// }

//EXERCISE 2

// $array = [1,3,5,7,9,11,13,15,17,19];
// foreach($array as $val){
//     echo "Value is $val <br>";
// }

//EXERCISE 3

// $randPam = array();

// for ($i = 0; $i < 10; $i++) {
//     $randPam[] = rand(1,100);
// };
// function highestValue($numbers){
//     if (empty($numbers)) {
//         return null; // Return null for an empty array or handle it as appropriate
//     }

//     $maxValue = $numbers[0]; // Assume the first element is the maximum

//     foreach ($numbers as $number) {
//         if ($number > $maxValue) {
//             $maxValue = $number; // Update the maximum value
//         }
//     }

//     return $maxValue;
// };

// $result = highestValue($randPam);
// echo "The highest value is $result";

//EXERCISE 4


for ($i = 1; $i <= 100; $i++) {
    if (($i % 3 == 0) && ($i % 5 == 0)) {
        echo "Full-Stack <br>";
    } else if ($i % 3 == 0) {
        echo "Back-End <br>";
    } else if ($i % 5 == 0) {
        echo "Front-End <br>";
    } else {
        echo $i . "<br>";
    }
}
