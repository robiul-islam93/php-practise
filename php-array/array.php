

<h1>PHP Arrays</h1><br>
<h4>PHP Indexed arrays</h4><br>
<?php  

$car = array("BMW", "Toyota", "Honda", "BMW", "Toyota", "Honda");
echo "I Like " . $car[0] . " , " . $car[1] . " And " . $car[2] ."," . $car[3] . " , " . $car[4] . " And " . $car[5] . " . ";
?>

<br><br><br>

<!DOCTYPE html>
<html>
<body>
    <h4>PHP Associative Arrays</h4>
    <?php 
    $age = array ("Robiul" => "23" , "Rahat" => "21", "Sagor" => "25");
    foreach($age as $x => $x_value){
        echo " my name " .$x. " age " .$x_value;
        echo "<br>";
    }
    echo "<br>";

    ?>

 <h4>PHP Multidimensional Arrays</h4>

    <?php

    $placename = array(
        array("pabna",0066,"bad"),
        array("dhaka",204,"road"),
        array("noyakhali",508),
        array("borisal",506)    
    );

    echo " I Hate " .$placename[0][0].  " , And I Love" .$placename[0][1]. " , " .$placename[0][2].  " . ";





    