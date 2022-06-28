<?php
    ##01 - Alphabet
/*
- Create a `sortLetters` function which receives a string as a parameter
- The function returns a string with the same $letters, in alphabetical order
- Call your function with "konexio" as argument and verify that you get "eiknoox"*/
    function sortLetters($str){

       $strArray= str_split($str);
    //    print_r($strSort);
        sort($strArray);
       return join($strArray);
        
    };
    echo sortLetters("konexio")."</br>";

    
##02 - XOXO

/*- Create a `countEach` function that receives a string containing x's and o's as parameters
- The function returns true if there are as many x's as o's, otherwise it returns false
- Check that the argument "xxxoooox" triggers a true, and that "xox" triggers a false*/

    function countEach($word) {
    $countO = 0;
    $countX = 0;

    for ($i = 0; $i < mb_strlen($word); $i++) {
        echo($word[$i])."</br>";
        switch ($word[$i]) {
            case "x": {
                $countX++;
                break;
            }
            case "o": {
                $countO++;
                break;
            }
        }
    }

    return $countO === $countX;
}

echo(countEach("xoxoxo"))."</br>";

## 03 - Palindrome

/*- Créez une fonction `checkPal` qui reçoit une string en paramètre
- La fonction retourne "Palindrome !" si le mot se lit dans les deux sens, sinon elle retourne "Nope"
- Vérifiez que vous obtenez un positif avec l'argument "racecar" mais pas avec "laptop"*/

function checkPal($word) {
   
    $wordLength = strlen($word)-1;
    $reversedWord = '';
    for($i=$wordLength; $i>=0; $i--){
        $reversedWord.=$word[$i];
    }
    if($reversedWord == $word)
        echo 'Palindrome !'."</br>";
    else
        echo "Nope"."</br>";
}

checkPal("racecar");
checkPal("laptop");


##04 - Swap

/*-- Create a `swap` function that receives a string as a parameter
- The function returns a string with the opposite case: a capital letter will become lowercase and vice versa
- Call your function with argument "Hello World" and verify that you get "hELLO wORLD"*/
function swap($sentence) {
     $swappedSentence = "";
    for ( $i = 0; $i < mb_strlen($sentence); $i++) {
         $letter = $sentence[$i];
        if ($letter === strtoupper($letter)) {
            $swappedSentence .= strtolower($letter);
        } else {
            $swappedSentence .= strtoupper($letter);
        }
    }

    return $swappedSentence;
}

echo(swap("Hello World"));
