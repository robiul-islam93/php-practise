<?php

// for loops 

for ($i=0; $i<=20; $i+=2){
    echo"$i<br>";
}
echo"<br>";
//whilr loops 

$w= 1;
while($w<=30){
    echo "$w<br>";
     $w++;
}
echo"<br>";
echo"<br>";

// do...while loops

$d=2;
do{
    echo "$d<br>";
    $d++;
}while($d<=40);

echo"<br>";
echo"<br>";

//Foreach start

$sector = array("web design","web development","wordpress","ui ux design","graphics design");
    foreach($sector as $value){

        echo "$value<br>";
    }


$sum_number = 1;
$fnishing_number = 50;

for($s=1; $s<=$fnishing_number; $s++){
    $sum_number=$sum_number+$s;
    if($s==$fnishing_number){
        echo $s;
    }else{
        echo $s." - ";
    }
}
echo " = " .$sum_number;

$sum = 1;
$limit = 50;

for($i=1; $i <=$limit; $i++){
    $sum=$sum +$i;
    if($i==$limit){
        echo $i;
    }else{
        echo $i ." - ";
    }
}
echo "=". $sum;
