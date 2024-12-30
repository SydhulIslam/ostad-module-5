<?php 

$strings = ["Ostad", "Bangladesh", "American", "Zimbabwe"];


foreach($strings as $string){ 

    $stringLower = strtolower($string);
    
    $vowels = ['a','e','i','o','u']; // selectted Vowels
    $vowelCount = 0;        // Count Vowels

    

    foreach (str_split($stringLower) as $character){ // str_split for string to array
        if(in_array($character, $vowels)){ // in_array() checks a value exists in an array
            $vowelCount++;
        }
    }

    $reversString = strrev($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversString \n <br>";
}



?>