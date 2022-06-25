<?php
## 01 sum of the squares 

// Calculate the sum of the squares of the numbers from 5 to 10
$sum = 0;

for ($i = 5; $i <= 10; $i++) {
    $sum += $i * $i;   
}

echo($sum)."</br>";

## 02 - Comptons

/*Count how many multiples of 7 there are between 100 and 1000
Expected result: 128*/

$count=0;

for($i= 100; $i <=  1000;$i++){

    if( $i%7 === 0){
        $count++;
    }

}

echo($count)."</br>";

## 03 - Chanceux

// Roll a die 20 times and display the sum of all results greater than or equal to 5.
$total=0;

for($x=0; $x<=20; $x++){

    $dice=rand(1,6);

    if($dice >= 5){
        echo($dice)."</br>";
        $total+= $dice;
    }
}
echo $total;

