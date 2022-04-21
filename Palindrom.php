<?php
function checkPalindrome($string) {
    //remove all spaces
    $string = str_replace(' ', '', $string);

    //remove special characters
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

    //change case to lower
    $string = strtolower($string);

    //reverse the string
    $reverse = strrev($string);

    if ($string == $reverse) {
        echo "<p>Palindrome</p>";
    } 
    else {
        echo "</p>Bukan Palindrome</p>";
    }
}

$string = "eko";
checkPalindrome($string);