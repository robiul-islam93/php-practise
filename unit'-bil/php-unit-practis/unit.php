<?php

$unit = 400;
$total = 0;

if ($unit>300){
    $u1 = 50 * 0.50;
    echo "unit 01 = $u1 <br>";
    $u2 = 150 *0.75;
    echo " unit 02 = $u2 <br>";
    $u3 = 250 * 1.20;
    echo "unit 03 = $u3 <br>";
    $u4 = 300 * 1.50;
    echo "unit 04 = $u4 <br>";
    $rem = $unit - 300;
    $u5 = $rem * 2;
    echo "unit 05 = $u5 <br>";

    $total = $u1 + $u2 + $u3 + $u4 + $u5;
    echo " <hr> Total Bill = $total <hr> ";

    $surcharge = $total / 20;
    $totalSurcharge = $surcharge + $total;
    echo " Bill with 20% Surcharge $totalSurcharge" ;
}


elseif ($unit > 50 && $unit <=300){
    $u1 = 50 * 0.50;
    echo "unit 01 = $u1 <br>";
    $rem = $unit - 50;
    $u2 = $rem * 0.75;
    echo  "unit 02 = $u2 <br>";
    $total = $u1 + $u2;
    echo " <hr> Total Bill $total<hr>";
    
    $surcharge = $total / 20;
    $totalSurcharge = $surcharge + $total;
    echo "Bill with 20% Surcharge $totalSurcharge <hr>";
}


else {
    $u1 = $unit * 0.50;
    echo "unit 01 = $u1 <br>";
    $total = $u1;
    echo "<hr> Total Bill = $total <hr>";
    $surcharge = $total / 20;
    $totalSurcharge = $surcharge + $total;
    echo " Bill with 20% Surcharge $totalSurcharge <hr>";
}

echo"<br>";
echo"<br>";
echo"<br>";


$unit = 40;
$total = 0;

if ($unit>300){
    $u1 = 50 * 0.50;
    echo "Unit 01 = $u1<br>"; 
    $u2 = 150 * 0.75;
    echo "Unit 02 = $u2<br>"; 
    $u3 = 250 * 1.20;
    echo "Unit 03 = $u3<br>"; 
    $u4 = 300 * 1.50;
    echo "Unit 04 = $u4<br>";
    
    $rem = $unit - 300;
    $u5 = $rem * 2 ;
    echo "Unit 05 = $u5<br>";

    $total = $u1 + $u2 + $u3 + $u4 + $u5;
    echo  " <hr> Total Bill = $total <hr>"; 

    $surcharge = $total / 20;
    $totalSurcharge = $surcharge + $total;
    echo " Bill with 20% Surcharge = $totalSurcharge";
}elseif ($unit>50 && $unit <=300){
    $u1 = 50 * 0.50;
    echo "Unit 01 = $u1<br>";
    $rem = $unit - 50;
    $u2 = $rem * 0.75;
    echo "Unit 02 = $u2<br>";
    $total = $u1 + $u2;
    echo "<hr>Total Bill = $total<hr><br>";
    $surcharge = $total / 20;
    $totalSurcharge = $surcharge + $total;
    echo " Bill with 20% Surcharge = $totalSurcharge";
}else{
    $u1 = $unit * 0.50;
    echo  "Unit 01 = $u1<br>";
    $total = $u1;
    echo "<hr>Total Bill $total<hr>";
    $surcharge = $total / 20;
    $totalSurcharge = $surcharge + $total;
    echo " Bill with 20% Surcharge = $totalSurcharge";
}