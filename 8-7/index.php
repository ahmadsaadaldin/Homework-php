<?php
////////////////////////////////////
//Q1
$i = 1;
while ($i <= 10) {
    echo $i;
    if($i<10){
    echo  "-";
    };
    $i++;
}
////////////////////////////////////////
//Q2
echo "<br>";
$x=0;
$counter=0;
while($x<=30){
    $counter+= $x;
    $x++;
}
echo $counter;
////////////////////////////////////////
//Q3
echo "<br>";
$size = 5;
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        if ($j < $size - $i - 1) {
            echo "A ";
        } else {
            echo chr(65 + $i) . " ";
        }
    }
    echo "<br>";
}
///////////////////////////////////////////
//Q4
echo "<br>";
for ($i = 0; $i < $size; $i++) {//row
    for ($j = 0; $j < $size; $j++) {//column
        if ($j < $size - $i - 1) {
            echo "1 ";
        } else {
            echo ($i + 1) . " ";
        }
    }

    echo "<br>";
}
//////////////////////////////////////////////
//Q5
echo "<br>";
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        if ($i == $j) {
            echo ($i + 1) . " ";
        } else {
            echo "0 ";
        }
    }
    echo "<br>";
}
///////////////////////////////////////////////////
//Q6
echo "<br>";
$number=5;
$fact=1;
for($i=1;$i<=$number;$i++){
    $fact *= $i;
}
echo $fact;
/////////////////////////////////////////////////////
//Q7
echo "<br>";
$n = 10;
$fib1 = 0;//first number
$fib2 = 1;//second number
echo $fib1;
for ($i = 1; $i < $n; $i++) {
    echo ", " . $fib2;
    $nextFib = $fib1 + $fib2;
    $fib1 = $fib2;
    $fib2 = $nextFib;
}
/////////////////////////////////////////////////////////////
//Q8
echo "<br>";
$text="Orange coding academy";
echo substr_count($text,'c');
/////////////////////////////////////////////////////////
//Q9
//table.php
/////////////////////////////////////////////////////////////
//Q10
echo "<br>";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}
////////////////////////////////////////////////////////////////
//Q11
echo "<br>";
$rows = 5;
$num = 1;
for ($i = 1; $i <= $rows; $i++) {  // Outer loop for rows
    for ($j = 1; $j <= $i; $j++) {  // Inner loop for columns in each row
        echo $num . " ";  // Print the current number
        $num++;  // Increment the number
    }
    echo "<br>";  // New line at the end of each row
}
///////////////////////////////////////////////////////////////////
//Q12

$letters = range('A', 'E');
$max_rows = count($letters);

// Print the top half of the diamond, including the middle row
for ($i = 0; $i < $max_rows; $i++) {
    // Print leading spaces for alignment
    for ($j = $max_rows - $i; $j > 1; $j--) {
        echo "&nbsp;&nbsp;";
    }
    // Print letters and spaces between them
    for ($j = 0; $j <= $i; $j++) {
        echo $letters[$j];
        if ($j < $i) {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
for ($i = $max_rows - 2; $i >= 0; $i--) {
    // Print leading spaces for alignment
    for ($j = $max_rows - $i; $j > 1; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 0; $j <= $i; $j++) {
        echo $letters[$j];
        if ($j < $i) {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}


?>