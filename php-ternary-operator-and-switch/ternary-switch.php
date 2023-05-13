<?php

//ternary operator
echo"<h1>Working with Ternary Operators and Nested Ternary Operators in PHP</h1>";

$n = 12;
if ( 12 == $n ) {
 echo "twelve";
}elseif( 13== $n){
    echo "Ten";
}
else{
    echo "A Number";
}
echo "<br>";

$numberin = ( 12== $n) ? "twelve" : "A Number";
echo $numberin;
echo "<br>";
if( $n % 2==0){
    echo "even number";
}
else{
    echo "odd number";
}
echo "<br>";
$result =(12==$n) ? "even number" : "odd number";
echo $result;
echo "<br>";

$anumber = (12==$n) ? "{$n} is an even number" : "{$n} Is a odd number"; // ternary operator
echo $anumber;


echo "<br>";
$rn =50;

$robiul =(50 ==$rn) ? "{$rn} is a even number" : "{$rn} is a odd number";
echo $robiul;
echo "<br>";



//The "switch" statement is used to perform different actions based on different conditions

echo"<h1>The switch statement is used to perform different actions based on different conditions</h1>";

$myfavoritecolor= "Cox's Bazar";
switch($myfavoritecolor){
    case "Cox's Bazar":
    echo "My Favorite place Is Cox's Bazar";
    break;
    case "Dhaka City":
        echo "My Favorite place Is Dhaka City";
        break;
        case "Sylhet City":
            echo "My Favorite place Is Sylhet City";
            break;
            case"Gazipur":
                echo "My Favorite place Is Gazipur";
                break;
                default:
                echo "My Favorite place Is শিলাইদাহ ";
}
echo "<br>";
echo "<br>";

$marknumber = 70;
switch ($marknumber){
    case $marknumber>80;
    echo "your gread A+";
    break;
    case $marknumber>70;
    echo "your gread A";
    break;
    case $marknumber>60;
    echo "your gread A-";
    break;
    case $marknumber>50;
    echo "your gread B";
    break;
    case $marknumber>45;
    echo "your gread C";
    break;
    case $marknumber>40;
    echo "your gread D";
    break;
    case $marknumber>33;
    echo "your gread D";
    break;
    case $marknumber>32;
    echo "your gread F";
    break;
    default:
    echo "ERROR ";
}

echo "<br>";
echo "<br>";
echo "Your Result Is A Grade";
echo "<br>";
echo "<br>";
echo "Congratulation You Are Passed! Or Field";

echo "<br>";
echo "<br>";

$swc = "10mark";
switch ( $swc){
    case "9mark":
    echo "nine  mark";
    break;
    case  8:
    echo "eight";
    break;
    case "10mark":
    echo "ten mark";
}