<?php

$rofiqul = 100;
$robiul = 200;
if ($rofiqul == $robiul){
    echo "rofiqul has same amount of money robiul";
}
elseif($rofiqul>$robiul){
    echo "rofuqul has more money than robiul";
}
elseif($rofiqul<$robiul){
    echo "rofuqul has less money than robiul";
}

echo "<br>";

$robimark = 68;
$rahatmark = 76;
if ($robimark == $rahatmark){
    echo "your Result Is : A Grade";
}
elseif($robimark>$rahatmark){
    echo "your Result Is : A Grade";
}
elseif($robimark<$rahatmark){
    echo "your Result Is : A Grade";
}
echo "<br>";

$mark = 76;
if($mark>=80){
    $grade = "A+";
}
elseif ($mark >=70) {
    $grade = "A";
}
elseif($mark >= 60){
    $grade = "A-";
}
elseif($mark >= 50){
    $grade = "A-";
}
elseif($mark >= 45){
    $grade = "C-";
}
elseif($mark >= 40){
    $grade = "D-";
}
elseif($mark >= 33){
    $grade = "D-";
}
elseif($mark >= 30){
    $grade = "F-";
}

echo "Your Result Is: ". $grade;
echo "<br>";
echo "<h3>Congratulation you are passed! or field</h3>";