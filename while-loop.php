
<?php
### 01 -count

// Using a while loop, display the even numbers between 50 and 200

    $i = 50;
    while ($i <= 200) {
        if ($i % 2 === 0) {
        // echo($i)."</br>";       
        }
        $i++;
    }

### 02 - Try dice again
    /*Create a `dice` variable that is null and a `count` variable that is 0
    As long as `dice` is not 6, assign the result of a random dice roll to dice and add 1 to `count`
    Print `count`, the number of times it took you to roll the dice to get a 6*/
  
   $dice = null;
   $count = 0;

    while ($dice !== 6) {
        echo($dice)."</br>";
        $dice =rand(1 , 6);
        $count++;
    }
echo ($count);

### 03 - Race

    /*Create two variables `ussainBolt` and `tysonGay` worth 0

    As long as one of the two variables has not exceeded 100

    Draw two random numbers between 1 and 10 and add the first number to the first variable and the second to the second

    Display the winner of the race (the variable that exceeded 100 first)*/

    $ussainBolt = 0;
    $tysonGay = 0;

    while ($ussainBolt < 100 && $tysonGay < 100) {
        
        $number1 =rand(1,10);
        $number2=rand(1,10);

        $ussainBolt += $number1;
        $tysonGay += $number2;

        echo("Ussain Bolt". $ussainBolt)."</br>";
        echo("Tyson Gay". $tysonGay)."</br>";
    }
    //The winner of the race
    if ($ussainBolt > $tysonGay) {
        echo("The winner is Usain Bolt")."</br>";
    } else if ($tysonGay > $ussainBolt) {
        echo("The winner is Tyson Gay")."</br>";
    } else {
        echo("Draw !");
    }

    