<?php
//while loops start
echo "<h1>PHP Loops Practics </h1>";
echo "<h3>while loops </h3>";
$loops = 1;
while ($loops<=10){
    echo "Programers Robi: $loops <br>";
    $loops++;
}
echo "<br>";

$loop = 0;
while ($loop<=30){
    echo "Programers Robi: $loop <br>";
    $loop+=10;
}

//while loops end
echo "<br>";

// Do loops start
echo "<h3>Do loops </h3>";
$do = 6;
do {
    echo "This number is: $do <br>";
    $do++;
}while(($do<=5));


$do1 = 15;
do {
    echo "this number is a: $do1 <br>";
    $do++;
}while(($do1 <= 10));

//For loops end

echo "<br>";
echo "<br>";


echo "<h3>For loops </h3>";
for( $fr = 2; $fr <=20; $fr++){
    echo "this number is a $fr <br> ";
}

//For loops end

//Foreach start

echo "<br>";
echo "<br>";
echo "<h3>Foreach loops </h3>";
$sector = array("Web Development", "Web Design", "WordPress Development", "Ui Ux Design", "Graphics Design",);
foreach ( $sector as $value){
    echo "$value <br>";
}
echo "<br>";
echo "<br>";

//Foreach end


for($r=0; $r<=10; $r++){
    echo "$r <br>";
}
echo "<br>";

$i= 0;

while($i<20){
    $i++;
    echo "$i<br>";
}
echo "<br>";
$D = 2;

do{
    $D++;
    echo "$D<br>";
}while($D<10);
echo "<br>";
echo "<br>";
$place = array("pabna,", "rajshai,", "Bogura,", "Cox's Bazar,",);
foreach($place as $variable){
    echo 
    "$variable<br>";
}
echo "<br>";
echo "<br>";
//multiple loops

for($if=10, $j=1; $if>0; $if-=1, $j++){
    echo "$if  : $j <br>";
}
echo "<br>";
echo "<br>";
$factorial_value= 5;

for($f=$factorial_value, $factorial=1; $f>1;$f++){
    $factorial*=$f;
}printf("Your factorial %s is %s", $factorial_value , $factorial);

$h= 6;
for($n=$h, $factorial=1; $n>1; $n--){
    $factorial= $factorial*$n;
}
printf ("factorial of %s is %s", $h, $factorial );

$h=10;

echo "<br>";
echo "<br>";
for($c=0, $D= 1; $c<10, $D<20; $c++, $D+=2){
    echo "$c $D<br>";
}
echo "<br>";
echo "<br>";
$factorial_value= 5;

for($f=$factorial_value, $factorial=1; $f>1;$f--){
    $factorial*=$f;
}printf("Your factorial %d is %d", $factorial_value , $factorial);
