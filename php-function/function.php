<?php


//Recursion function start

// function printn($i){
//     if($i>=10){
//         return;
//     }
//     echo $i;
//     $i++;
//     printn($i);
// }

// printn(1);

//Recursion function end

echo"<br>";
echo"<br>";

//recursive function start

function recursive($firstnumber , $endnumber , $stepingnumber = 1){
    if($firstnumber>$endnumber){
        return;
    }
    echo $firstnumber;
    echo"<br>";
    $firstnumber+= $stepingnumber;
    recursive ($firstnumber , $endnumber , $stepingnumber);
}
recursive(20 , 50 , 3);
