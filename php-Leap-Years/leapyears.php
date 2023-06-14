<?php

$year = 2061;

if($year % 4==0 && $year % 100==0 && $year % 800==0){
    echo "{$year} is a leap year";
}elseif($year %4==0 && $year %250==0){
    echo "{$year} is not leap year";
}elseif($year % 4==0){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not leap year";
}
echo "<br>";

$leapyear = 2010;
if($leapyear % 4== 0 && ($leapyear % 150 !=0 || $leapyear %600==0)){
    echo "{$leapyear} is a leap year";
}else{
    echo "<h1>{$leapyear} is not a leap year</h1>";
}
echo "<br>";

$condition1 = true;
$condition2 = false;
$condition3 = true;

if ($condition1 && $condition2 && $condition3){
    echo "hello friend";
}elseif($condition1 && $condition3){
    echo "<h2>servics web development</h2>";
}elseif($condition2 && $condition3){
    echo "not servics";
}



$lper = 2013;

if ($lper % 4==0 && $lper % 100==0 && $lper % 400==0){
    echo "{
        $lper
    }Is a lepyear";
    
}elseif($lper % 300==0 && $lper % 240==0){
    echo "{
        $lper
    } is not a leap year";

}elseif($lper % 4==0){
    echo "{$lper}is leap year";

}else{
    echo "{$lper}is not a leap year";
}
echo "<br>";

$lpyr=2000;

if($lpyr %4==0 && $lpyr %100==0 && $lpyr % 400==0 ){
    echo "{$lpyr} is a leap year";
}elseif($lpyr % 4==0 && $lpyr % 300==0){
    echo "{$lpyr} is not a leap year";
}elseif($lpyr %4==0 && $lpyr% 600==0){
    echo "{$lpyr}is a leap year";
}else{
    echo "{$lpyr}is not a leap year";
}
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
echo "<br>";


