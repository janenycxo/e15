<?php

session_start();

$inputString = $_POST['inputString'];

function isBigWord($inputString)
{
    if(strlen($inputString) > 7) {
        return 'Yes';
    }else {
        return 'No'; 
    }
}

function isPalindrome($inputString)
{
    if(strrev($inputString) == ($inputString)) {
        return 'Yes, your input is a palindrome which means the input string is the same forwards and backwards.';
    }else {
        return 'No, your input is not a palindrome.'; 
    }
}

function containsVowels($inputString)
{
    $array = str_split($inputString);
    if (in_array("a", $array) || in_array("e", $array) || in_array("i", $array) || in_array("o", $array) || in_array("u", $array)) {
        return 'Yes, your input contains vowels.';
    } else {
        return 'No, your input does not contain any vowels.';
    }
}

function vowelCount($inputString)
{
    preg_match_all('/[aeiou]/i', $inputString, $matches);
    return count($matches[0]);
}

function capitalLetters($inputString)
{
   return strtoupper($inputString);
}

function smallLetters($inputString)
{
   return strtolower($inputString);
}

function capitalizeFirst($inputString)
{
    return ucfirst($inputString);
}

$_SESSION['results'] =[
    'isBigWord' => isBigWord($inputString),
    'isPalindrome' => isPalindrome($inputString),
    'containsVowels' => containsVowels($inputString),
    'vowelCount' => vowelCount($inputString),
    'capitalLetters' => capitalLetters($inputString),
    'smallLetters' => smallLetters($inputString),
    'capitalizeFirst' => capitalizeFirst($inputString)
];

header('Location: index.php');