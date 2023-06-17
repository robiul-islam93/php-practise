<?php


$number = 120;

if($number % 2==0 && $number %  12==0 && $number %  20==0){
    echo "<h1>{$number} This number is even </h1>";
}elseif($number % 3==0 && $number % 7==0){
    echo "<h1>{$number} This number is odd  </h1> " ;
}elseif($number % 2==0){
    echo "<h1>{$number} This number is even  </h1> ";
}else{
    echo "<h1> {$number}  This number is odd </h1> ";
}
echo "<br>";
echo "<br>";

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

$marknumber = 75;
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
echo "Congratulation You Are Passed!";

echo "<br>";
echo "<br>";

$swc = "10mark";
switch ( $swc){
    case "9mark":
    echo "nine  mark";
    break;
    case  8:
    echo 8;
    break;
    case "10mark":
    echo "ten mark";
}

echo "<br>";
echo "<br>";

$sw = 13;
$ws = $sw % 2;

switch ($ws){
    case 0:

        switch ($sw){
            case $sw>0:
                echo "$sw is a positive even number";
                break;
                case $sw<0:
                    echo "$sw is a negagive odd number" ;
                    break;
        }
        break;
        default:
        switch ($sw){
            case $sw>0:
                echo "$sw is a positive odd number";
                break;
                case $sw<0:
                    echo "$sw is a negagive odd number" ;
        }
}

echo "<br>";
echo "<br>";
switch (true){

    case($ws==0 && $sw>0):
        echo "$sw is a positive even number";
        break;
        case ($ws==1 && $sw>0):
        echo "$sw is a postive odd number";
         break;   
    case($ws==0 && $sw<0):
        echo "$sw is a negative even number";
        break;
        case ($ws==-1 && $sw<0):
        echo "$sw is a negative odd number";

}
echo "<br>";
echo "<br>";


$dj = 12;
$mdr = $dj % 2;
if ($dj %2==0){
    echo "even number";
}else{
    echo "odd number";
}

echo "<br>";
echo "<br>";


switch($mdr){
    case 0:

        switch($dj){
            case $dj>0:
                echo "$dj is a positive even number";
                break;
                case $dj<0:
                    echo "$dj is this a positive odd number";
                    break;
        }
        break;
        default:
        switch($dj){
            case $dj<0:
                echo "$dj is a positive even number";
                break;
                case $dj>0:
                    echo "$dj is this a positive odd number";
}

}

echo "<br>";
echo "<br>";

$m = 12;
$resultt = ($m % 2==0) ? "A" : (($m==11) ? "B" : "C");
echo $resultt;