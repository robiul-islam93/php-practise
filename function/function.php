<?php

//Recursion and Recursive Functions

function printnumber($start, $end, $defalt = 1){
    if($start>$end){
        return;
    }
    echo "$start <br>";
    $start+=$defalt;
    printnumber($start, $end, $defalt);
}

printnumber(20,80,10);

echo "<br>";
echo "<br>";


function fibanocci($old, $new, $start, $end){
    if($start>$end){
        return;
    }
    $start++;
    echo "$old<br>";
    $_temp= $old + $new;
    $old=$new;
    $new=$_temp;

    fibanocci($old, $new, $start, $end);
}
 fibanocci (0,1,1,31);