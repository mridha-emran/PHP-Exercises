<?php
    ## odd even-1

    /* - Create a `checkIfEven` function that receives a `num` parameter
    - In the function, using a condition, show "even" if `num` is even, "odd" if it is odd
    - Call your function multiple times with different numbers as argument to check the results*/

 function checkIfEven ($num){
    if($num %2 == 0){
         echo("this number is even")."</br>";
    }
    else{
        echo("this number is odd" )."</br>";
    }
 }
    checkIfEven(10);
    checkIfEven(9);
    checkIfEven(16);


##compare-2

/*- Create a `compare` function which receives two parameters `num1` and `num2`
  - In the function, using a condition, display as appropriate:
  - "`num1` is bigger" if `num1` is bigger
  - "`num2` is bigger" if `num2` is bigger
  - "both are the same" if they are equal
- Call your function multiple times with different digits to check results*/
 
function compare($num1,$num2){
    if($num1 > $num2){
        echo($num1."is bigger")."</br>";
    }
    elseif($num2>$num1){
         echo($num2."is bigger")."</br>";
    }
    else{
         echo("both are the same")."</br>";
    }
}
compare(2,7);
compare(12,3);
compare(2,2);

## Add Up-3

// - Create an `addUp` function that receives a `num` parameter
// - Using a loop, add the digits from 1 to `num`
// - Call your function with the number 12 and verify that you get 78

function addUp($num){
    $totelNum=0;
    
    for($x=1;$x<=$num;$x++){
        $totelNum = $totelNum+$x;
    }
    return $totelNum ."</br>";
};
echo addUp(12);
##Time-4
/*- Create a `format` function that receives a `num` parameter that represents seconds
- Make the function return an `hours:minutes:seconds` format
- Call your function with argument `3700` and verify that you get `1:1:40`*/

function format($num) {
     $hours = floor($num / 3600);

     $rest = $num - $hours * 3600;

     $minutes = floor($rest / 60);

     $seconds = $rest - $minutes * 60;
        
      return("{$hours} : {$minutes} : {$seconds}");
}

  echo format(3700)."</br>";



  ##Password generater 05

  /*- Create a `generatePassword` function that receives a `num` parameter
- The function generates a random password, with as many letters as the value of `num`
- The password will only contain uppercase letters
- If `num` is less than 6 or greater than 15, the function returns "error"*/

  function generatePassword($num) {
    $lettres = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    $password = array();
    if ($num < 6 || $num > 15) {
        return "erreur";

    }
    else{
        for ($i = 0; $i < $num; $i++) {

            $max = count($lettres)-1;
            $min=0;
            $b = rand($max,$min);

            array_push($password, $lettres[$b]);
        }

        return join($password);
    }

}

$final= generatePassword(6);
echo($final)."</br>";

## launch Dice-6

// /*- Create a `launchDice` function that receives a `numberOfDice` parameter
/*- The function will randomly roll dice an amount of times equal to the value of `numberOfDice` and return their sum
- Call the function twice with argument 5, once for `player1` and once for `player2`.
- Compare the values of the two players and Display the winning player (the one with the highest score)*/


function launchDice($numberOfDice){
    $total=0;
    for($i=0;$i<$numberOfDice;$i++){
        $randomNum=rand($numberOfDice,0);
        $total=$total+$randomNum;
    }
    return $total;
}


$player1=launchDice(5);
$player2=launchDice(5);

if($player1>$player2){
    echo("{$player1}is than{$player2} player1 win");
}elseif($player2>$player1){
    echo("{$player2}is than{$player1} player2 win");
}else{
    echo("draw");
}