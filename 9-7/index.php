<?php
////////////////////////////////////////
//Q1
$colors=array('red','green','white');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0]
carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. -
Richard M. Nixon";
//////////////////////////////////////
//Q2
echo "<br>";
$colors=array('red','green','white');
foreach($colors  as $color){
    echo "<ul><li>$color</li></ul>";
    
}
////////////////////////////////////////
//Q3
echo "<br>";
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid" );
foreach($cities as $country => $city){
    echo "The capital of $country is $city.<br>";
}
/////////////////////////////////////////
//Q4
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo  $color[4];
/////////////////////////////////////////
//Q5
echo"<br>";
$arr = array(1, 2, 3, 4, 5);
$position = 4;
$char = "$";
$temp = array();
for ($i = 0; $i < count($arr); $i++) {
    if ($i == $position) {
        array_push($temp, $char);
    }
    $temp[] = $arr[$i];
}
print_r($temp);
/////////////////////////////////////////
//Q6
echo"<br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    krsort($fruits);
foreach($fruits as $x => $y){
    echo $x ."=". $y."<br>"; 
}
//////////////////////////////////////////
//Q7
echo"<br>";
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average = array_sum($temperatures) / count($temperatures);
sort($temperatures);
$lowest_temps = array_slice($temperatures, 0, 5);
$highest_temps = array_slice($temperatures, -5);
echo "Average Temperature is: " . round($average, 1) . "<br>";
echo "List of five lowest temperatures: " . implode(", ", $lowest_temps) . "<br>";
echo "List of five highest temperatures: " . implode(", ", $highest_temps) . "<br>";
///////////////////////////////////////////
//Q8
echo"<br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
///////////////////////////////////////////
//Q9
$colors = array("red","blue", "white","yellow");
$arr2=array();
foreach ($colors as $color) {
    echo strtoupper($color)."<br>";
}
///////////////////////////////////////////
//Q10
$colors = array("red","blue", "white","yellow");
$arr2=array();
foreach ($colors as $color) {
    echo strtolower($color)."<br>";
}
////////////////////////////////////////////
//Q11
echo"<br>";
$big=250;
for($i=200;$i<=$big;$i++){
if($i % 4==0){
    echo $i." ";
}
}
///////////////////////////////////////////////
//Q12
echo"<br>";
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
$shortest = strlen($words[0]);
$longest = strlen($words[0]);
foreach ($words as $word) {
    $length = strlen($word);
    if ($length < $shortest) {
        $shortest = $length;
    }
    if ($length > $longest) {
        $longest = $length;
    }
}
echo "The shortest array length is $shortest. The longest array length is $longest.";
///////////////////////////////////////////
//Q13
echo"<br>";
$min = 11;
$max = 20;
$count = 10;
$numbers = range($min, $max);
shuffle($numbers);
$randomNumbers = array_slice($numbers, 0, $count);
echo implode(" ", $randomNumbers);
/////////////////////////////////////////////
//Q14
$array1 = array(2, 0, 10, 12, 6);
$lowest = null; 
foreach ($array1 as $value) {
    if ($value != 0) {
        if ($lowest === null || $value < $lowest) {
            $lowest = $value;
        }
    }
}

echo  implode(", ", $array1);
echo  $lowest;
////////////////////////////////////////////////
//Q15
$inputArray = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
function bubbleSort(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}
bubbleSort($inputArray);

echo implode(", ", $inputArray);
////////////////////////////////////////////////////
//Q16
$testCases = [
    [1.155, 2, '.'],
    [100.25781, 4, '.'],
    [-2.9636, 3, '.']
];

foreach ($testCases as $testCase) {
    $number = $testCase[0];
    $precision = $testCase[1];
    $separator = $testCase[2];
    $adjustedNumber = floor($number * pow(10, $precision)) / pow(10, $precision);
    $formattedNumber = number_format($adjustedNumber, $precision, $separator);
    echo "Number: $number, Precision: $precision, Separator: '$separator' => $formattedNumber\n";
}
//////////////////////////////////////////////////////////
//Q17
function removeDuplicates($inputArray) {
    $uniqueArray = array();
    
    foreach ($inputArray as $element) {
        if (!in_array($element, $uniqueArray)) {
            $uniqueArray[] = $element;
        }
    }
    return $uniqueArray;
}
$inputArray = array(4, 5, 6, 7, 4, 7, 8);
$uniqueArray = removeDuplicates($inputArray);
echo implode(", ", $inputArray) . "\n";
echo implode(", ", $uniqueArray) . "\n";
///////////////////////////////////////////////////////////////
//Q18
function isSubset($array1, $array2) {
    $difference = array_diff($array2, $array1);
    return empty($difference);
}
$array1 = ['a', '1', '2', '3', '4'];
$array2 = ['a', '3'];
if (isSubset($array1, $array2)) {
    echo "array2 is a subset of array1";
} else {
    echo "array2 is not a subset of array1";
}
?>

