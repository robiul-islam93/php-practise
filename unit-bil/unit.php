<?php




$unit = 200;
if($unit>0 && $unit<=50){
    $result = $unit * 0.50;
    $serviccharge = ($result *20) / 100;
    $totalbil = $result + $serviccharge;
    echo " Your Electricity Bill is: $totalbil ";
}elseif($unit>50 && $unit<=150){
    $result = $unit * 0.75;
    $serviccharge = ($result * 20) / 100;
    $totalbil = $result + $serviccharge;
    echo "Your Electricity Bill: $totalbil";
}elseif($unit>150 && $unit<=250){
    $result = $unit * 1.20;
    $serviccharge = ($result * 20) /100;
    $totalbil = $serviccharge + $result;
    echo "Your Electricity Bill: $totalbil";
}elseif($unit>300){
    $result = $unit * 1.50;
    $serviccharge = ($result * 20) / 100;
    $totalbil = $result + $serviccharge;
    echo " Your Electricity Bill Is: $totalbil ";
}else{
    echo "Try Again Lettar";
}