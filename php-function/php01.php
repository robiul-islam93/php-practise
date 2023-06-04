
<?php

//detarmines if the argument is even number and odd number

function evenorodd($n){

    if($n % 2==0){
        return true;
    }
    return false;
    }

    function factorial($f){
        $result=1;
        for($i=$f; $i>1; $i--){
            $result *=$i;
        }
        return $result;
    }
