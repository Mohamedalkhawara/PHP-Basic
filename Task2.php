<?php


echo "<br>";
echo "<br>";
echo "----------------------------task1---------------------------------";
echo "<br>";
echo "<br>";

//-----------------------task 1 ---------------------------//

$output = "";

for($i=1; $i<=10; $i++){
    $output .= $i;

    if ($i<10){
        $output .= "-";
    }
}

echo $output;

echo "<br>";
echo "<br>";
echo "----------------------------task2---------------------------------";
//-----------------------task 2 ---------------------------//
echo "<br>";
echo "<br>";

$sum = 0;

for($i = 0; $i <= 30; $i++){
    $sum += $i;
}
echo "The total sum of integers from 0 to 30 is: $sum";

echo "<br>";
echo "<br>";
echo "----------------------------task3---------------------------------";
//-----------------------task 3 ---------------------------//
echo "<br>";
echo "<br>";

for($i=0; $i<5; $i++){
    for($j=0; $j<5; $j++){
        if($j<(5-$i)){
            echo "A "; 
        }else{
        echo chr(64+$i) . " ";
        }
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "----------------------------task4---------------------------------";
//-----------------------task 4 ---------------------------//
echo "<br>";
echo "<br>";

for($i = 0; $i< 5; $i++){
    for($j = 0; $j< 5; $j++){
        if($i==$j){
            echo ($i+1) . " ";
        }else{
            echo "0 ";
        }
    }
echo "<br>";
}

echo "<br>";
echo "<br>";
echo "----------------------------task5---------------------------------";
//-----------------------task 5 ---------------------------//
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 5; $i++) {         
    for ($j = 1; $j <= 5; $j++) {      
        if ($j <= 5 - $i) {           
            echo "1 ";
        } else {                      
            echo $i . " ";
        }
    }
    echo "<br>";                       
}

echo "<br>";
echo "<br>";
echo "----------------------------task6---------------------------------";
//-----------------------task 6 ---------------------------//
echo "<br>";
echo "<br>";

$number = 5;

$factorial = 1;

for($i=1; $i<= $number; $i++){
    $factorial *= $i;

}

echo "the factorial of $number is : $factorial";

echo "<br>";
echo "<br>";
echo "----------------------------task7---------------------------------";
//-----------------------task 7 ---------------------------//
echo "<br>";
echo "<br>";

$number = 20;

$num1 = 0;
$num2 = 1;

for($i=2; $i <= $number; $i++){
    $nextNum = $num1 + $num2;
    echo $nextNum . " ";
    $num1 = $num2;
    $num2 = $nextNum;

}

echo "<br>";
echo "<br>";
echo "----------------------------task8---------------------------------";
//-----------------------task 8 ---------------------------//
echo "<br>";
echo "<br>";

$text = "Orange Coding Academy";
$count = 0;


for($i= 0;$i< strlen($text); $i++ ){
    if($text[$i] == 'c' || $text[$i] == 'C'){
        $count++;
    }
}

echo "number of 'C' in text is : $count";

echo "<br>";
echo "<br>";
echo "----------------------------task9---------------------------------";
//-----------------------task 9 ---------------------------//
echo "<br>";
echo "<br>";
/*for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>";
        for ($k = 1; $k <= 6; $k++) {
            $result = $k * $j;
            echo "$k * $j = $result<br>";
        }
        echo "</td>";
    }
    echo "</tr>";
}*/   


echo "<br>";
echo "<br>";
echo "----------------------------task10---------------------------------";
//-----------------------task 10 ---------------------------//
echo "<br>";
echo "<br>";

for($i=1; $i<= 50; $i++){
    if($i %3 == 0 && $i %5 == 0){
        echo "FizzBuzz<br>";

    }elseif($i %3 == 0){
        echo "Fizz";
    }elseif($i %5 == 0){
        echo "Buzz";

    }else{
        echo "$i ";
    }
}

echo "<br>";
echo "<br>";
echo "----------------------------task11---------------------------------";
//-----------------------task 11 ---------------------------//
echo "<br>";
echo "<br>";

function generateFloydTriangle($n) {
    $number = 1;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $number . " ";
            $number++;
        }
        echo "<br>";
    }
}

// Example usage: Generate the first 5 lines of a Floyd triangle
$n = 5;
generateFloydTriangle($n);

echo "<br>";
echo "<br>";
echo "----------------------------task12---------------------------------";
//-----------------------task 12 ---------------------------//
echo "<br>";
echo "<br>";

function printPattern() {
    $maxRows = 5;
    
    for ($i = 1; $i <= $maxRows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo "<br>";
    }

    for ($i = $maxRows - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo "<br>";
    }
}

printPattern();


echo "<br>";
echo "<br>";
echo "----------------------------task13---------------------------------";
//-----------------------task 13 ---------------------------//
echo "<br>";
echo "<br>";

$array1 = array(2, 4, 7, 4, 8, 4);

$array1 = array_unique($array1);

$array1 = array_values($array1);

print_r($array1);


echo "<br>";
echo "<br>";
echo "----------------------------task1  page2 ---------------------------------";
//-----------------------task 1 page2---------------------------//
echo "<br>";
echo "<br>";


function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    if ($num == 2) {
        return true;
    }
    if ($num % 2 == 0) {
        return false;
    }
    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 29;
if (isPrime($number)) {
    echo "$number  the number is the prime number .";
} else {
    echo "$number  the number is not a prime number .";
}

echo "<br>";
echo "<br>";
echo "----------------------------task2  page2 ---------------------------------";
//-----------------------task 2 page2---------------------------//
echo "<br>";
echo "<br>";


function reverseString($string){
    return strrev($string);
}

$originalString = "remove";
$reverseString = reverseString($originalString);

echo $reverseString;

echo "<br>";
echo "<br>";
echo "----------------------------task3  page2 ---------------------------------";
//-----------------------task 3 page2---------------------------//
echo "<br>";
echo "<br>";


function isLowerCases($string){
    if($string === strtolower($string)){
        echo "true";
    } else echo "false";
}
isLowerCases("wwRwr");

echo "<br>";
echo "<br>";
echo "----------------------------task4  page2 ---------------------------------";
//-----------------------task 4 page2---------------------------//
echo "<br>";
echo "<br>";
echo "<br>";
$strings="qwiuqdjaskl";
if (ctype_lower($strings)) {
    echo "no upper case";
} else {
    echo "there is upper";
}
echo "<br>";
echo "<br>";
echo "----------------------------task5  page2 ---------------------------------";
//-----------------------task 5 page2---------------------------//
echo "<br>"; 
function swap($x,$y){
    $tmp=$x;
    $x=$y;
    $y=$tmp; 
    echo $x ." ".$y;
}
swap(2,3);
echo "<br>";
echo "<br>";
echo "----------------------------task6  page2 ---------------------------------";
//-----------------------task 6 page2---------------------------//
echo "<br>"; 

$num =407 ;
function checkIfArmStronge ($num){
$check = $num;
    $sum = 0;
    $digit = 0;
    while ($check != 0) {

    $digit =$check % 10;
    $sum +=pow($digit, strlen($num)) ;
    $check = $check /10;
    }



    if($num == $sum)
        echo "is armStrong";
    else
        echo "is not armStrong";


}
checkIfArmStronge($num);
echo "<br>";
echo "<br>";
echo "----------------------------task7  page2 ---------------------------------";
//-----------------------task 7 page2---------------------------//
echo "<br>";
$string = "Eva, can i see bees in cave?";
function isPalindrome($value){
    $cleanValue = strtolower(preg_replace("/[^a-zA-Z0-9\s]/", "", $value));

    $pieces = explode(' ', $cleanValue);

    $first_word = array_shift($pieces);
    $last_word = array_pop($pieces);

    $last_word_part = substr($last_word, 1, strlen($first_word));
    $last_word_part = strtolower($last_word_part);

    $revFirstWord = strrev($first_word);

    echo $last_word_part ;
    echo "<br>";
    echo $revFirstWord ;
    echo "<br>";

    if ($last_word_part ==    $revFirstWord) {
        echo "The result is a palindrome!";
    } else {
        echo "The result is not a palindrome.";
    }
}
isPalindrome($string);

echo "<br>";
echo "<br>";
echo "----------------------------task48  page2 ---------------------------------";
//-----------------------task 8 page2---------------------------//
echo "<br>";
$numbers =array(1,1,2,3,3,4,4,5,5,6,7) ;
function removeDup ($num){
    $length = count($num);

for ($i= 0 ; $i < $length; $i++){
    $prevNumber =$num[$i];
    for($j = $i + 1 ; $j <$length ; $j++)
    if($prevNumber == $num[$j]){
        array_splice($num ,$j ,1);
        $i--;
        $length--;
    }
}
print_r($num);
}
removeDup($numbers)











?>