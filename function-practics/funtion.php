<?php

include_once "function.php";

echo"<h1> PHP Functions </h1>";

echo "<br>";
familyname("Robiul","2004<br>");
familyname("Rahat","2004<br>");
familyname("Sagor","2004<br>");

echo "<br>";

setheight(50);
echo "<br>";
setheight(150);
echo "<br>";
setheight(250);
echo "<br>";
setheight(350);
echo "<br>";



for($i=0; $i<=10; $i++){
    if (isEven($i)){
        echo "$i is a even number";
    }else {
        echo "$i is a odd number";
    }
}

echo "<br>";
$foodname = "Pizza";
$itemnumber = "2 Dish";

serve($foodname , $itemnumber);
echo sum(10,20,30);
echo sumnumber( 5,10,20,30,20,25,);
