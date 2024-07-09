
    <?php

    //----------------task1-----------------//

    //----task1-a-----------//

    $string = "hello world";
    $uppercaseString = strtoupper($string);
    echo $uppercaseString; 

    echo '<br>';
    echo '<br>';

        //----task1-b-----------//

        $string = "HELLO WORLD";
        $uppercaseString = strtolower($string);
        echo $uppercaseString; 

        echo '<br>';
            echo '<br>';

        //----task1-c-----------//
        
        $string = "hello world";
        $uppercaseString = ucfirst($string);
        echo $uppercaseString; 

        echo '<br>';
        echo '<br>';


        //----task1-d-----------//

        $string = "hello world";
        $capitalizedString = ucwords($string);
        echo $capitalizedString;

        echo '<br>';
        echo '<br>';


    //----------------task2-----------------//


    $dateString = "19950123";

    $year = substr($dateString, 0, 4);
    $month = substr($dateString, 4, 2);
    $day = substr($dateString, 6, 2);

    $dateFormal = $year.'-'. $month. '-' . $day;
    echo $dateFormal;

    echo '<br>';
    echo '<br>';

        //----------------task3-----------------//

        $sentence = "iam a full stak devloper at orange cooding academy";
        $word = "full";
        $secWord = "me"; 

        $position = strpos($sentence, $word);
        if($position === false){
            echo "word not found";
        }else{
            echo "the $word was found in the sentence at position $position";
        }
        
    echo '<br>';
    echo '<br>';
        
        $position = strpos($sentence, $secWord);

        if($position === false){
            echo "word not found";
        }else{
            echo "the $secWord was found in the sentence at position $position";
        }

        echo '<br>';
        echo '<br>';

                //----------------task4-----------------//

        $url = "www.orange.com/indix.php";
        $path = parse_url($url, PHP_URL_PATH);
        $fileName = basename($path);
        echo "the file name is : $fileName";
        
        echo '<br>';
        echo '<br>';

        $url = "www.orange.com/indix.php";
        $parsedUrl = parse_url($url);
        $path = $parsedUrl['path'];
        $fileName = basename($path);
        echo "the file name is : $fileName";

        echo '<br>';
        echo '<br>';

              //----------------task5-----------------//

        $Email = "mohamed.alkhawara@yahoo.com";
        $part = explode("@", $Email);
        $username = $part[0];
        echo "the user name is $username";

        echo '<br>';
        echo '<br>';

              //----------------task6-----------------//

        $string = "Hello World";
        $lastThreeChar= substr($string, -3);
        echo "the last Three characters Is $lastThreeChar";

        echo '<br>';
        echo '<br>';

                      //----------------task7-----------------//
        
            
        $givenString = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            
            function generateRandomPassword($string, $length) {
                $password = '';
                $stringLength = strlen($string);
                
                $randomBytes = openssl_random_pseudo_bytes($length);
                
                for ($i = 0; $i < $length; $i++) {
                    $index = ord($randomBytes[$i]) % $stringLength;
                    $password .= $string[$index];
                    } return $password;
                } 
            $passwordLength = 10;
            $randomPassword = generateRandomPassword($givenString, $passwordLength);
            echo "The random password is: $randomPassword";

            echo '<br>';
            echo '<br>';

                       //----------------task8-----------------//

        $sentence = "That new trainee is so genius.";
        $newword = "our";

        $newsentence = preg_replace('/^\w+/', $newword, $sentence);

        echo "$newsentence";

        echo '<br>';
            echo '<br>';

                    //----------------task9-----------------//

        $string1 = "dragonball";
        $string2 = "dragonboll";

        function diffrentCharacter($str1, $str2){
            $length = min(strlen($str1), strlen($str2));

            for($i = 0 ; $i < $length ; $i++){
                if ($str1[$i] !== $str2[$i]){
                    return "The first different between '{$str1[$i]}' and '{$str2[$i]}' in the second string at position $i.";

                }
            }
        }

        $result = diffrentCharacter($string1, $string2);
        echo $result;

        echo '<br>';
            echo '<br>';

                    //----------------task10-----------------//

                    
$string = "Twinkle, twinkle, little star.";

$array = explode(" ", $string);

var_dump($array);

echo '<br>';
echo '<br>';
                    //----------------task11-----------------//
    


$inputLetter = 'a';

$asciiValue = ord($inputLetter);

if (($inputLetter >= 'a' && $inputLetter <= 'y') || ($inputLetter >= 'A' && $inputLetter <= 'Y')) {
    $nextAsciiValue = $asciiValue + 1;
} elseif ($inputLetter == 'z') {
    $nextAsciiValue = ord('a');
} elseif ($inputLetter == 'Z') {
    $nextAsciiValue = ord('A');
} else {
    echo "Invalid input letter.";
    exit;
}

$nextLetter = chr($nextAsciiValue);

echo "The next letter after '$inputLetter' is '$nextLetter'.";

echo '<br>';
echo '<br>';

                    //----------------task12-----------------//


$originalString = "The brown fox";
$insertString = "   quick";
$position = 3;

if ($position > strlen($originalString)){
    $position = strlen($originalString);
}

$part1 = substr($originalString, 0, $position);
$part2 = substr($originalString, $position);

$newstring = $part1 . $insertString . $part2;

echo $newstring;


echo '<br>';
echo '<br>';

                    //----------------task13-----------------//

$originalNumber = "1020304050";


#str_replace('المراد تغييره', "النص الجديد', 'النص الاصلي')
$NumberWithoutZeros = str_replace('0', '', $originalNumber);

echo $NumberWithoutZeros;

echo '<br>';
echo '<br>';

                    //----------------task14-----------------//


$originalString= "hello butifull world";

$newstring = str_replace('butifull', '', $originalString);
echo $newstring;

echo '<br>';
echo '<br>';
                    //----------------task15-----------------//


$originalString = "The quick brown fox jumps over the laze fox - - - ";

$newstring = str_replace('-', '', $originalString);
echo $newstring;

echo '<br>';
echo '<br>';

                    //----------------task16-----------------//

$originalString = "Hello @123 world!@#$%^&&*()";

$newstring = preg_replace('/[^a-zA-Z0-9]/', '', $originalString);

echo $newstring;

echo '<br>';
echo '<br>';


                    //----------------task17-----------------//

$originalString = "The quick brown fox jumps over the lazy dog";

$wordArray = explode(' ', $originalString);

$fivewords = array_slice($wordArray, 0, 5);
$result = implode(' ', $fivewords);
echo $result;

echo '<br>';
echo '<br>';

                    //----------------task18-----------------//

$originalNumber = "2,543.32";
$cleanNumber = str_replace(',', '', $originalNumber);
echo $cleanNumber;
echo '<br>';
echo '<br>';

                    //----------------task19-----------------//

$start = ord('a');
$end = ord('z');

for($i = $start; $i <= $end; $i++){
    $letters = chr($i);

    echo $letters ." ";

}

echo '<br>';
echo '<br>';

                    //----------------task1 secPage-----------------//

$year = 2020;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)){
    echo "this year $year is leep";
}else{
    echo "$year is not leep year";
}

echo '<br>';
echo '<br>';

                    //----------------task2 secPage-----------------//

$temperature = 25 ;

function checkSeason($temp){
if ($temp<20){
    return "winter";

}else{
    return "summer";
}
}
$season = checkSeason($temperature);
echo "the season is :$season";

echo '<br>';
echo '<br>';

                    //----------------task3 secPage-----------------//

$number1 = 2;
$number2 = 1;

function calculateSmOrtriple($num1, $num2){
    $sum = $num1+$num2;

    if($num1==$num2){
        return 3*$sum;
    }else{
        return $sum;
    }
}

$result =calculateSmOrtriple($number1, $number2);


echo "the result is : $result";

echo '<br>';
echo '<br>';

                    //----------------task4 secPage-----------------//

$number1 = 1;
$number2 = 15;

function checkSum($num1, $num2){
    $sum = $num1+$num2;
    if ($sum ==30){
        return $sum;
    }else{
        return false ;
    }
}

$result = checkSum($number1, $number2);

if($result !== false){
    echo "the sum of the numbers is : $result";
}else{
    echo "False ";
}

echo '<br>';
echo '<br>';

                    //----------------task5 secPage-----------------//

$number = 20;
$divisor = 2;

function isMultiple($num, $divisor){
    if($num % $divisor ==0){
       return true;
    }else{
        return false;
    }
}
$result = isMultiple($number, $divisor);

if($result==true){
    echo "$number is a multiple of $divisor";

}else{
    echo "$number is not multiple of $divisor";

}

echo '<br>';
echo '<br>';

                    //----------------task6 secPage-----------------//

$value = 5;

function isInRang($num){
    if($num >= 20 && $num <=50 ){
        return true;
    }else{
        return false;
    }
}

$result = isInRang($value);
if($result == true){
    echo "$value is in the range of 20 to 50.";
}else{
    echo "$value is not in the range of 20 to 50.";

}

echo '<br>';
echo '<br>';

                    //----------------task7 secPage-----------------//


$number1 = 10;
$number2 = 25;
$number3 = 15;

$largest = max($number1, $number2, $number3);

echo "The largest number is: $largest";

echo '<br>';
echo '<br>';

                    //----------------task8 secPage-----------------//


$units = 100;

function calculateBilll($units){
    $bill = 0;

    if ($units <= 50){
        $bill *2.5;
    }elseif($bill <= 150){
        $bill = (50*2.5)+ (($units-50)*5);
    }elseif($bill <= 250){
        $bill = (50*2.5)+(100*5)+(($units-150)*6.2);
    }else{
        $bill = (50*2.5)+(100*5)+(100*6.2)+ (($units-250)*7.5);
    }
    return $bill;
}

$result = calculateBilll($units);

echo "your bill is : $result";
echo "<br>";
echo "The total electricity bill for $units units is: " . number_format($result, 2) . " JOD";

echo '<br>';
echo '<br>';

                    //----------------task9 secPage-----------------//


                   /* if (isset($_POST['calculate'])) {
                        $number1 = $_POST['number1'];
                        $number2 = $_POST['number2'];
                        $operation = $_POST['operation'];
                        $result = '';
                
                        if ($operation == 'add') {
                            $result = $number1 + $number2;
                        } elseif ($operation == 'subtract') {
                            $result = $number1 - $number2;
                        } elseif ($operation == 'multiply') {
                            $result = $number1 * $number2;
                        } elseif ($operation == 'divide') {
                            if ($number2 != 0) {
                                $result = $number1 / $number2;
                            } else {
                                $result = 'Error! Division by zero.';
                            }
                        }
                        echo "<h3>Result: $result</h3>";
                    }*/


                    echo '<br>';
                    echo '<br>';
                    
                                        //----------------task10 secPage-----------------//
                    
$age = 20;

function isEligibleToVote($age){
    if($age >= 18){
        return true;
    }else{
        return false;
    }

}
$result = isEligibleToVote($age);

if ($result){
    echo "The person is eligible to vote.";
}else{
    echo "The person is not eligible to vote.";
}

echo '<br>';
echo '<br>';

                    //----------------task11 secPage-----------------//

$number = -10;

function checkNumber($num){
    if($num < 0){
        return "negative";
    }elseif($num == 0){
        return "Zero";
    }else{
        return "positive";

    }
}

$result = checkNumber($number);

echo "the number $number is $result";

echo '<br>';
echo '<br>';

                    //----------------task1 secPage-----------------//

$score = [50, 80, 90, 66, 75];

function calculateScore($score){
    $total = array_sum($score);
    $count = count($score);
    $average = $total / $count;
    return $average;
}
function determineGrade($average) {
    if($average >= 90){
    return "A";
}elseif($average >=80){
    return "B";
}elseif ($average >=70){
    return "C";
}elseif($average >=60){
    return "D";
}else{
    return "F";
}
}


$average = calculateScore($score);

$grade = determineGrade($average);
echo "The grade is: $grade";







































    ?>
</body>
</html>