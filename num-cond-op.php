<?php
// 01 - Number
$integer = 102;
$float = 13.9;

echo($integer ."</br>" );
echo($float ."</br>");

// 02 - Convert
$basic = 34;
$stringfied = strval($basic ."</br>");

echo($stringfied);

// 03 - Round
$num = 1.5;

$rounded = round($num);

echo($rounded);

// 04 - Arithmétique
$test = 12;
$bis = 5;

echo("Addition:" .$test + $bis)."</br>";

echo("Soustraction:" .$test - $bis)."</br>";

echo("Multiplication:" .$test * $bis)."</br>";

echo("Division:" .$test / $bis)."</br>";

echo("P:". pow($test,$bis)) ."</br>";

echo("Reste:". $test % $bis)."</br>";

// // 05 - Comparaison
$test = 14;
$$bis = 29;



echo(var_dump($test >$bis)."</br>");
echo(var_dump($test < $bis)."</br>");
echo(var_dump($test >= $bis)."</br>");
echo(var_dump($test <= $bis)."</br>");
echo(var_dump($test == $bis)."</br>");
echo(var_dump($test === $bis)."</br>");
echo(var_dump($test != $bis)."</br>");
echo(var_dump($test !== $bis)."</br>");

// 06 - Condition
$limit = 50;
$score = 64;

if ($score >= $limit) {
    echo("Ok good !")."</br>";
} else {
    echo("Oh noooo...")."</br>";
}

// 07 - Condition II
$password = "azerty";

if (strlen($password) > 5) {
    echo("The password is secure")."</br>";
}

// 08 - Condition III
$limit = 50;
$score = 49;
$password = "azert";

if ($score >= $limit && strlen($password) > 5) {
    echo("Everything is good")."</br>";
} else if ($score >= $limit || strlen($password)> 5) {
    echo("Something is good")."</br>";
} else {
    echo("Nothing is good")."</br>";
}

// 09 - random number
 $randomNum =rand(1,6);
    echo($randomNum)."</br>";
 if($randomNum==6){
     echo("yes you win")."</br>";
 }else{
     echo("soo close")."</br>";
 }


