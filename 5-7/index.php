<?php
//Q1
$year= 1998;
if($year%4==0 && $year%100!=0){
    echo "this is a leap year";
}else{
    echo "this is not a leap year";
}
//////////////////////////////////////
echo "<br>";
//Q2
$tempreture=21;
if($tempreture<20){
    echo "its winter";
}else{
    echo "its summer";
}
//////////////////////////////////////
//Q3
echo "<br>";
$Fnum=3;
$Snum=3;
if($Fnum !=$Snum){
    echo $Fnum+$Snum;
}else{
    echo ($Fnum+$Snum)*3;
}
///////////////////////////////////////
//Q4
echo"<br>";
$num1=15;
$num2=15;
if($num1+$num2==30){
    echo "True";
}else{
    echo "False";
}
////////////////////////////////////////
//Q5
echo"<br>";
$number=15;
if($number %3 ==0){
    echo "True";
}else{
    echo "False";
}
////////////////////////////////////////
//Q6
echo"<br>";
$int=32;
if($int>=20 && $int<=50){
    echo "True";
}else{
    echo "False";
}
/////////////////////////////////////////
//Q7
echo "<br>";
$number01=17;
$number02=13;
$number03=2;
if($number01>$number02 && $number01>$number03){
echo $number01;
}elseif($number02>$number01 && $number02>$number03){
    echo $number02;
}elseif($number03>$number01 && $number03>$number02){
    echo $number03;
}else{
    echo "there is equal numbers";
}
///////////////////////////////////////////////
//Q8
echo "<br>";
$bill=300;
if($bill<=50){
echo $bill*2.5;
}elseif($bill>50 && $bill<=150){
    echo $bill*5;
}elseif($bill>150 && $bill<=250){
    echo $bill*6.2;
}elseif($bill>250){
    echo $bill*7.5;
}
///////////////////////////////////////////////////
//Q9
echo "<br>";
$firstnum=2;
$secondnum=6;
$operator="*";
switch($operator){
    case "+":
        echo $firstnum+$secondnum;
        break;
    case "-":
        echo $firstnum-$secondnum;
        break;
    case "*":
        echo $firstnum*$secondnum;
        break;    
    case "/":
         echo $firstnum/$secondnum;
        break;           
}
//////////////////////////////////////////////////
//Q10
echo "<br>";
$age=20;
if($age<18){
    echo "you cant vote";
}else{
    echo "you can vote";
}
/////////////////////////////////////////////////////
//Q11
echo "<br>";
$numberc=-60;
if($numberc<0){
    echo "negative";
}elseif($numberc==0){
    echo "zero";
}elseif($numberc>0){
    echo "Positive";
}
/////////////////////////////////////////////////
//Q12
echo "<br>";
$marks=array(12,43,52,97,89,79,98,100);
$count=0;
$sum=0;
foreach($marks as $stdmark){
    $sum+=$stdmark;
    $count++;
}
$avg=$sum/$count;
if($avg<=100 && $avg>90){
    echo 'A';
}
if($avg<=90 && $avg>80){
    echo 'B';
}
if($avg<=80 && $avg>70){
    echo 'c';
}
if($avg<=70 && $avg>60){
    echo 'D';
}
if($avg<60){
    echo 'F';
}
////////////////////////////////////////////////////////////////
//Part 2
/////////////////////////////////////////////////////////////
//Q1
echo "<br>";
$str="I aM aHmAd SaDdIn";
echo strtoupper($str);
echo "<br>";
echo strtolower($str);
echo "<br>";
echo ucfirst($str);//first letter to (upper case)
echo "<br>";
echo lcfirst($str);//first letter to (lower case)
////////////////////////////////////////////////////////////////
//Q2
echo "<br>";
$string = "085119";
$time = substr($string, 0, 2) . ":" . substr($string, 2, 2) . ":" . substr($string, 4, 2);
echo $time;//substr is used for curring strings  first we call the string, then we choose the index,then the number of letters we want to cut
///////////////////////////////////////////////////////////////////
//Q3
echo "<br>";
$word="I am a fullstack developer at orange coding academy";
$want="orange";
if(str_contains($word,$want)){
    echo "word found!";
}else{
    echo "word not found :(";
}//str_contains(),used for finding specific word in a string
////////////////////////////////////////////////////////////////////
//Q4
echo "<br>";
$url = 'http://127.0.0.1/5-7/index.php';
$file_name = basename(parse_url($url, PHP_URL_PATH));
echo $file_name;
/*parse_url($url, PHP_URL_PATH)

The parse_url function parses a URL and returns its components. The second parameter specifies which component to return.
PHP_URL_PATH is a predefined constant that tells parse_url to return the path component of the URL.
For the URL 'http://127.0.0.1/5-7/index.php', the path component is '/5-7/index.php'.
basename(parse_url($url, PHP_URL_PATH))

The basename function returns the trailing name component of a path.
When applied to the path '/5-7/index.php', basename returns 'index.php'.
*/
/////////////////////////////////////////////////////////////////////
//Q5
echo("<br>");
$email="ahmadsaddin@gmail.com";
$name=strtok($email,"@");
echo $name;
//strok for finding the string before anything we want for example "@"
////////////////////////////////////////////////////////////////////////
//Q6
echo("<br>");
$email2="ahmadsaddin@gmail.com";
echo substr($email,-3);//substr when we use negative we take the last letter and -3 mean the last 3 letters
/////////////////////////////////////////////////////////////////////////////////////////////////
//Q7
echo("<br>");
$length = 5;

$randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, $length);
echo $randomletter;//first we change position of numbers using shuffle then we use sub str to cut a piece of the string and 0 for index start and length is for the number of output letters
/////////////////////////////////////////////////////////////////////////////////////////
//Q8
echo("<br>");
$mystring = "that new trainee is a genius";
$replaced = "our";
$result = preg_replace('/^\w+/', $replaced, $mystring);
echo $result;
///^\w+/ this is a regex for finding the first word 
//preg_replace(regex,the word that we want to replace,the original string)
///////////////////////////////////////////////////////////////////////////////////////////////
//Q9
// Define two strings to compare
echo("<br>");

$str1 = 'dragonball';
$str2 = 'dragonboll';

// Find the length of the shorter string
$length = min(strlen($str1), strlen($str2));

for ($i = 0; $i < $length; $i++) {
    if ($str1[$i] !== $str2[$i]) {
        echo 'First difference between two strings at position ' . $i . ': "' . $str1[$i] . '" vs "' . $str2[$i] . '"';
        break; 
    }
}
//////////////////////////////////////////////////////////////////////////////////////////////
//Q10
echo("<br>");
$twinkle="twinkle twinkle little star";
$stringArray = explode(" ", $twinkle);
echo var_dump($stringArray);
// explode is used for splitting w sentnce into words and inserting them into an array
//dump gives us the information of every word or charcter in an array
///////////////////////////////////////////////////////////////////////////////////////////////
//Q11
echo("<br>");
$letter="a";
$lastletter="z";
echo ++$letter;
echo("<br>");
echo ++$lastletter;
///////////////////////////////////////////////////////////////////////////////////////////////
//Q12
echo("<br>");
$sentence="the brown fox";
$inserted=" quick ";
$part1=substr($sentence,0,3);
$part2=substr($sentence,3);
echo $part1 ,$inserted ,$part2;
/////////////////////////////////////////////////////////////////////////////////
//Q13
echo("<br>");
$numbers="012438900012300230320.503";
$nozero=str_replace("0","",$numbers);
echo $nozero;
////////////////////////////////////////////////////////////////////////////////////
//Q14
echo("<br>");
$words="my name is ahmad i am web developer";
$noword=str_replace("web","",$words);
echo $noword;
//////////////////////////////////////////////////////////////////////////////////////
//Q15
echo("<br>");
$fox="THE QUICK BROWN FOX JUMPED OVER THE DOG---";
$nodash=str_replace("---","",$fox);
echo $nodash;
///////////////////////////////////////////////////////////////////////////////////////
//Q16
echo("<br>");
$strings="i@ am% a&hma!d";
$res = str_replace( array( '\'', '"',',' , ';', '<', '>','@','#','%','^','&','*','$','!' ), '', $strings);
echo $res;
//////////////////////////////////////////////////////////////////////////////////////////
//Q17
echo("<br>");
$sentence = "The quick brown fox jumps over the lazy dog";
$words = explode(" ", $sentence);// Split the string into an array of words
$firstFiveWords = array_slice($words, 0, 5); // Get the first 5 words starts from 0
$result = implode(" ", $firstFiveWords);//put words back togther
echo $result;
//////////////////////////////////////////////////////////////////////////////////
//Q18
echo("<br>");
$float="298,3878.2089";
$nocomma=str_replace(array(',','.'),'',$float);
echo $nocomma;
//////////////////////////////////////////////////////////////////////////////////////
//Q19
echo("<br>");
$firstletter = 'a';
for ($i = 0; $i < 26; $i++) {
    echo $firstletter++ . " "; // or echo ++$firstletter . "<br>" for different result
}
?>

