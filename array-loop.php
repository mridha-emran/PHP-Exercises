<?php
// 01 - Array 
$fruits = array ("mango", "lemon", "blueberry");                                      
echo($fruits[0].$fruits[1].$fruits[2])."</br>";
print_r($fruits)."</br>";

//  02 - Access 
// - Create an `ingredients` variable which will contain an array with the values `"eggs"`, `"milk"` and `"butter"`
// - Make `"milk"`  will appear 
// - Bring up the index of `"butter"`

$ingredients = array("eggs", "milk", "butter");
echo"<pre>";
print_r($ingredients[1])."</br>";
echo(array_search("butter", $ingredients))."</br>";
echo"</pre>";

/*03 - Add and Remove
- Create an `myObjects` variable which will contain an array with the values `"pen"`, `"book"` and `"lamp"`
- Add `"chair"` at the beginning of the table then display the result
- Remove `"lamp"` then display the result
- Add `"laptop"` at the end of the table then display the result
- Remove `"flesh"` then display the result*/

$myObjects = array("pen", "book", "lamp"); 

echo"<pre>";
array_unshift( $myObjects ,"chair")."</br>";
print_r($myObjects)."</br>";

array_pop($myObjects);
print_r($myObjects)."</br>";

array_push( $myObjects,"chair",);
print_r($myObjects)."</br>";

array_shift($myObjects);
print_r($myObjects)."</br>";


// Test remove elements array 5 to 3
echo("test03")."</br>";
$array = array(2, 5, 9, 15,76, 43);

$index = array_search(5 , $array);

echo($index)."</br>";

array_splice($array,$index, 1 ,3);

print_r($array);

// 04 - Order
/*
- Create a variable `numbers` which will contain an array with the values `4`, `10`, `8`, `12` and `6`
- Reverse the order of elements of `numbers` then display the result
- Arrange the elements of `numbers` in ascending order then display the result*/

echo"<pre>";
$myNumbers = array(4, 10, 8, 12, 6);

    print_r(array_reverse($myNumbers))."</br>";

    sort($myNumbers);
    print_r($myNumbers)."</br>";

    rsort($myNumbers);
    print_r($myNumbers)."</br>";
 
    //natural order
$naturalOrder = array("img3","img7","img19","img21","img1","img9");

    natsort($naturalOrder);
    print_r($naturalOrder);
echo"</pre>";




// 06 - Reverse
/*
- Create a `sentence` variable equal to "Hello world!"
- Using a for loop and without using the .reverse() function,
 make sure to display the inverse of your `sentence` variable ("! dlrow olleH")*/

$sentence = "Hello world !";
$myArray = str_split($sentence);

$result = array();

for ($i = 0; $i < count($myArray); $i++) {
    $item = $myArray[$i];   
    // echo("item". $item)."</br>";
    array_unshift($result,$item);
}
//  print_r($result);

 $ReverseWord = join($result);
 echo($ReverseWord).".</br>";

 //06 random
/*- Create a Array with the name of each of your classmates
- Randomly display the name of the person drawn*/

$students = array("Arman", "ManiK", "Raja", "Fasulu", "Jony", "Ikram", "Karimo"); 

    $min = 0;
    $max = count($students)- 1;
    $random = rand($min,$max); 
    echo($students[$random])."</br>"; 

//07 random max number
/*- Create an empty array
- With a for loop, add 20 random integers between 0 and 100
- Display this array
- With a second for loop, find the largest integer in your array (not allowed to use max function)*/

$array = array();
$min = 0; 
$max = 100;

for ($i = 1; $i <= 20; $i++) {
    $numRandom = rand($min,$max);
    array_push( $array,$numRandom);
 
}
    echo"<pre>";
        print_r($array);
    echo"</pre>";
    // largest integer
$numMax = $array[0]; 
    for ($i = 1; $i < count($array); $i++) {
        $item = $array[$i];
        if ($item > $numMax) {
            $numMax = $item;
        }
    }

echo($numMax);

