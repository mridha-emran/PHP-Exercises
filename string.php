
<?php
// 01 - Hello World

echo("Hello World !"."</br>");

// 02 - String

$test = "My name is Jane";
echo($test ."</br>");

// 03 - Concatenation

$name = "Jane";
echo('Nice to meet you '.$name ."</br>");

// 04 - String Length

$test = "I'm very long !";
echo strlen($test ."</br>");

//  05 - Replace
$food = "croissant Is meh";
$movie = "movie Is goOd";
echo str_replace("meh", "so good", $food ."</br>");
echo str_ireplace("is good", "was meh", $movi ."</br>");


// 06 - UpperCase and lowerCase

$basic = "This is Cool";
$basicUp =strtoupper($basic);
$basicDown = strtolower($basic);

echo($basic ."</br>");
echo($basicUp ."</br>");
echo($basicDown ."</br>");

// 07 - Split

$word = "banana";
$letters = str_split($word);
print_r($letters);

