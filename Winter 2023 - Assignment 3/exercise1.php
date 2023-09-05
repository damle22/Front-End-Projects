<?php

function findSummation($integer){

     $sum = 0;

     for($count = 0; $count <= $integer; $count++)
     $sum = $sum + $count;

return $sum;
}

function uppercaseFirstandLast($word){
     
     $word = ucfirst($word);
    
     $word[strlen($word) - 1] = strtoupper($word[strlen($word) - 1]);

     return $word;
}

function findAverage_and_Median($arr){

     $length = count($arr);
     $sum = 0;

     for($i = 0; $i <= $length - 1; $i++)
     $sum = $sum + $arr[$i];

     $average = $sum / $length;

     if($length %2 == 0){
     $index = $length / 2;
     $median = ($arr[$index] + $arr[$index -1]) / 2;
     }

     else{
     $index = $length / 2;
     $median = $arr[$index];
     }
     $string = $sum . " and " . $median . ".<br>";
     return $string;
}

function find4Digits($string){

     $line = explode(" ", $string);
     $length = count($line);

     for($i = 0; $i <= $length; $i++)
          if(strlen($line[$i]) == 4 && is_numeric($line[$i]))
               return $line[$i];

               return "false";
}

echo ("<h2> Testing findSummation function </h2>");
$integer = 5;
echo ("The summation of $integer is " .findSummation($integer) . ".<br>");

echo ("<h2> Testing uppercaseFirstandLast function </h2>");
$word = "hello";
echo ("The summation of $word is " .uppercaseFirstandLast($word) . ".<br>");

echo ("<h2> Testing findAverage_and_Median function </h2>");
$arr = Array(2,4,6,8,10,12);
echo("The average and the median is " .findAverage_and_Median($arr));

echo ("<h2> Testing find4Digits function </h2>");
$line = "111 22 3 4444";
echo("The first four digits are: " .find4Digits($line) . ".<br>");


?>