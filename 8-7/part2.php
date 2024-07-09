<?php
/////////////////////////////////////////
//Q1
$arr = array(2,4,7,4,8);
array_pop($arr);
foreach ($arr as $value) {
    echo $value . " ";
}
///////////////////////////////////////
//Q2
echo "<br>";
function prime($number){
    for($i=2;$i<$number;$i++){
        if($number % $i==0){
            return 0;
        }else{
            return 1;
        }
    }
}
$y=4;
$x=prime($y);
if($x==1){
    echo  $y ." ". "is a prime number";
}else{
    echo $y ." ". "is not a prime number";
}
///////////////////////////////////////////////
//Q3
echo "<br>";
$string ="remove";
$rev=strrev($string);
echo $rev;
//////////////////////////////////////////////
//Q4
echo "<br>";    
$strings="qwiuqdjaskl";
if (ctype_lower($strings)) {
    echo "no upper case";
} else {
    echo "there is upper";
}
///////////////////////////////////////////////
//Q5
echo "<br>"; 
function swap($x,$y){
    $tmp=$x;
    $x=$y;
    $y=$tmp; 
    echo $x ." ".$y;   
}
swap(2,3);
///////////////////////////////////////////////////
//Q6
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
////////////////////////////////////////////////////
//q7
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

/////////////////////////////////////
//q8
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