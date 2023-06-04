<?php 

function familyname($fname, $year){
    echo "$fname islam. born in $year ";
}

function setheight( int $minheight = 50){
    echo "The Height is: $minheight";
}

function isEven($n){
    if ($n % 2==0){
        return true;
    }
    return false;
}

function serve($foodtype , $numberitem){
    echo "{$foodtype} of {$numberitem} have been serve";
}

function sum (int $x, int $y, int $z){
    return $x+$y+$z;
}


function sumnumber( int ... $numbers) : int{
    $result = 0;
    for ($i=0; $i<count($numbers);$i++){
        $result += $numbers[$i];
    }
    return $result;
}

